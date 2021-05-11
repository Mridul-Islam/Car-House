using Microsoft.AspNetCore.Mvc;
using Car_House.Models;
using Microsoft.AspNetCore.Authorization;


namespace Car_House.Controllers
{
    [Authorize]
    public class AdminController: Controller
    {
        public IActionResult Profile(){
            return View();
        }




    }
}