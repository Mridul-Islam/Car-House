using System.Diagnostics;
using Microsoft.AspNetCore.Mvc;


namespace Car_House.Controllers
{
    public class AdminController: Controller
    {
        public IActionResult Profile(){
            return View();
        }
    }
}