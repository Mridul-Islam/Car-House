using Microsoft.AspNetCore.Mvc;
using Car_House.ViewModels;

namespace Car_House.Controllers
{
    public class UserController:Controller
    {

        [HttpGet]
        public IActionResult Register(){
            return View();
        }

        // [HttpPost]
        // public IActionResult Register(RegisterUserViewModel regModel){

        // }



    }
}