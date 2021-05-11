using Microsoft.AspNetCore.Mvc;
using Car_House.ViewModels;
using Microsoft.AspNetCore.Identity;
using System.Threading.Tasks;
using Car_House.Models;

namespace Car_House.Controllers
{
    public class UserController:Controller
    {
        private readonly UserManager<UpdateUser> _userManager;
        private readonly SignInManager<UpdateUser> _signInManager;
        public UserController(UserManager<UpdateUser> userManager,
                                SignInManager<UpdateUser> signInManager)
        {
            this._userManager = userManager;
            this._signInManager = signInManager;
        }

        [HttpGet]
        public IActionResult Register(){
            return View();
        }

        [HttpPost]
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
                    return RedirectToAction("login", "user");
                }
                // if create user is not successful
                foreach(var error in result.Errors){
                    ModelState.AddModelError("", error.Description);
                }
            }
            return View(regModel);
        }

        [HttpPost]
        public async Task<IActionResult> Logout(){
            // SignoutAsync method do not need any parameter because this is async method
            await _signInManager.SignOutAsync();
            return RedirectToAction("index", "home");
        }

        [HttpGet]
        public IActionResult LogIn(){
            return View();
        }

        [HttpPost]
        public async Task<IActionResult> LogIn(LogInViewModel model){
            if(ModelState.IsValid){
                var result = await _signInManager.PasswordSignInAsync(model.Email, model.Password,
                                                    model.RememberMe, false);
                if(result.Succeeded){
                    return RedirectToAction("profile", "Admin");
                }
                ModelState.AddModelError("", "Invalid LogIn Attemp");
            }
            return View(model);
        }

        [HttpGet][HttpPost]
        public async Task<IActionResult> IsEmailInUse(string Email){
            var user = await _userManager.FindByEmailAsync(Email);
            if(user == null){
                return Json(true);
            }
            else{
                return Json($"Email {Email} is already in use");
            }
        }



    }
}