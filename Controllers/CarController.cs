using Microsoft.AspNetCore.Mvc;



namespace Car_House.Controllers
{
    public class CarController: Controller
    {

        public IActionResult Index(){
            return View();
        }

        [HttpGet]
        public IActionResult Create(){
            return View();
        }
    }
}