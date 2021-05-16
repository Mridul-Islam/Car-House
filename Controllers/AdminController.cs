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



namespace Car_House.Controllers
{
    [Authorize]
    public class AdminController: Controller
    {
        private readonly SignInManager<UpdateUser> _signInManager;
        private readonly UserManager<UpdateUser> _userManager;
        private readonly IWebHostEnvironment _hostingEnvironment;
        public AdminController(SignInManager<UpdateUser> signInManager,
                                UserManager<UpdateUser> userManager,
                                IWebHostEnvironment hostingEnvironment)
        {
            this._signInManager = signInManager;
            this._userManager = userManager;
            _hostingEnvironment = hostingEnvironment;
        }

        public async Task<IActionResult> Profile(string id){
            var upUser = await _userManager.FindByNameAsync(id);
            var email = upUser.UserName;
            UpdateUser user = _userManager.Users.FirstOrDefault(x => x.UserName == email);
            if(user == null) 
            {
                return RedirectToAction("Login", "Users");
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


        public async Task<IActionResult> UpdateProfile(string name){
            var upUser = await _userManager.FindByNameAsync(name);
            var email = upUser.UserName;
            UpdateUser user = _userManager.Users.FirstOrDefault(x => x.UserName == email);
            ProfileViewModel updateProfile = new ProfileViewModel
            {
                UserID = user.UserName,
                FirstName = user.FirstName,
                LastName = user.LastName
            };
            return View(updateProfile);
        }



    }
}