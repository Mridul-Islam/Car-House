using Microsoft.AspNetCore.Mvc;
using Car_House.Models;
using Microsoft.AspNetCore.Authorization;
using Car_House.ViewModels;
using Microsoft.AspNetCore.Identity;
using System.Threading.Tasks;
using System.Linq;
using System.Text;
using Microsoft.AspNetCore.Hosting;
using Microsoft.AspNetCore.Http;
using System.IO;
using System;



namespace Car_House.Controllers
{
    [Authorize]
    public class AdminController: Controller
    {
        private readonly SignInManager<UpdateUser> _signInManager;
        private readonly UserManager<UpdateUser> _userManager;
        private readonly IWebHostEnvironment _hostingEnvironment;
        private readonly ICarRepository _adminWork;
        public AdminController(SignInManager<UpdateUser> signInManager,
                                UserManager<UpdateUser> userManager,
                                IWebHostEnvironment hostingEnvironment,
                                ICarRepository adminWork)
        {
            this._signInManager = signInManager;
            this._userManager = userManager;
            this._hostingEnvironment = hostingEnvironment;
            this._adminWork = adminWork;
        }

        [AllowAnonymous]
        public IActionResult Index(){
            return View();
        }

        [AllowAnonymous]
        [HttpGet]
        public IActionResult Register(){
            return View();
        }

        [HttpPost]
        [AllowAnonymous]
        public async Task<IActionResult> Register(RegisterUserViewModel regModel){
            if(ModelState.IsValid){
                var user = new UpdateUser {
                    FirstName = regModel.FirstName,
                    LastName = regModel.LastName,
                    UserName = regModel.Email,
                    Email = regModel.Email
                };
                var result = await _userManager.CreateAsync(user,regModel.Password);

                if(result.Succeeded){
                    await _signInManager.SignInAsync(user, isPersistent:false);
                    return RedirectToAction("login", "Admin");
                }
                // if create user is not successful
                foreach(var error in result.Errors){
                    ModelState.AddModelError("", error.Description);
                }
            }
            return View(regModel);
        }

        [HttpPost]
        [AllowAnonymous]
        public async Task<IActionResult> Logout(){
            // SignoutAsync method do not need any parameter because this is async method
            await _signInManager.SignOutAsync();
            return RedirectToAction("index", "Admin");
        }

        [HttpGet][AllowAnonymous]
        public IActionResult LogIn(){
            return View();
        }

        [HttpPost][AllowAnonymous]
        public async Task<IActionResult> LogIn(LogInViewModel model){
            if(ModelState.IsValid){
                var result = await _signInManager.PasswordSignInAsync(model.Email, model.Password,
                                                    model.RememberMe, false);
                if(result.Succeeded){
                    return RedirectToAction("index", "Car");
                }
                ModelState.AddModelError("", "Invalid LogIn Attempt");
            }
            return View(model);
        }

        [HttpGet][HttpPost]
        [AllowAnonymous]
        public async Task<IActionResult> IsEmailInUse(string Email){
            var user = await _userManager.FindByEmailAsync(Email);
            if(user == null){
                return Json(true);
            }
            else{
                return Json($"Email {Email} is already in use");
            }
        }



        public IActionResult Profile(string name){
            // var upUser = await _userManager.FindByNameAsync(id);
            // var email = upUser.UserName;
            UpdateUser user = _adminWork.GetUser(name);
            if(user == null) 
            {
                return RedirectToAction("Login", "Admin");
            }

            string pp = null;
            if (user.ProfilePicture == null) pp = "Person.jpg";
            else pp = user.ProfilePicture;

            ProfileViewModel profileView = new ProfileViewModel
            {
                UserID = user.UserName,
                FirstName = user.FirstName,
                LastName = user.LastName,
                ProfilePicture = pp
            };

            return View(profileView);
        }

        public string ProcessUploadedFile(ProfileViewModel model){
            string uniqueFileName = null;
                if(model.Images!=null){
                    //foreach(IFormFile image in model.Images){
                        // WebRoot will help to reach to wwwroot folder
                        string uploadsFolder = Path.Combine(_hostingEnvironment.WebRootPath, "images");
                        //for uniquely recognize use the guid class
                        uniqueFileName = Guid.NewGuid().ToString() + "_" + model.Images.FileName;
                        string filepath = Path.Combine(uploadsFolder, uniqueFileName);
                        using (var fileStream = new FileStream(filepath, FileMode.Create)){
                            model.Images.CopyTo(fileStream);
                        }
                        
                    //}
                }
                return uniqueFileName;
        }


        [HttpGet]
        public IActionResult UpdateProfile(string name){
            UpdateUser updateUser = _adminWork.GetUser(name);
            ProfileViewModel updateProfile = new ProfileViewModel
            {
                UserID = updateUser.UserName,
                FirstName = updateUser.FirstName,
                LastName = updateUser.LastName,
                ProfilePicture = updateUser.ProfilePicture
            };
            return View(updateProfile);
        }

        [HttpPost]
        public IActionResult UpdateProfile(ProfileViewModel model, string name){
            if(ModelState.IsValid){
                //var upUser = await _userManager.FindByNameAsync(name);
                // var email = upUser.UserName;
                // UpdateUser user = _userManager.Users.FirstOrDefault(x => x.UserName == email);
                UpdateUser upUser = _adminWork.GetUser(name);                

                upUser.FirstName = model.FirstName;
                upUser.LastName = model.LastName;
                //upUser.ProfilePicture = model.Images.ToString();
                if(model.Images != null){
                    if(model.ProfilePicture != null){
                        string filePath = Path.Combine(_hostingEnvironment.WebRootPath,"images",
                            model.ProfilePicture);
                        System.IO.File.Delete(filePath);
                    }
                    upUser.ProfilePicture = ProcessUploadedFile(model);
                }
                _adminWork.Modify(upUser);
                //_userManager.Users.Modify(upUser);

                return RedirectToAction("Profile", "Admin");
            }
            return View();
        }

        public IActionResult ChangePassword(){
            return View();
        }

        [HttpGet]
        public IActionResult AccountDelete(string name){
            UpdateUser updateUser = _adminWork.GetUser(name);
            ProfileViewModel deleteProfile = new ProfileViewModel
            {
                UserID = updateUser.UserName,
                FirstName = updateUser.FirstName,
                LastName = updateUser.LastName,
                ProfilePicture = updateUser.ProfilePicture
            };
            return View(deleteProfile);
        }

        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public IActionResult DeleteConfirmed(string name)
        {
            
            //var car = _carRepository.GetCar(id);
            _adminWork.DeleteUser(name);
            return RedirectToAction("Profile", "Admin");
        }

        



    }
}