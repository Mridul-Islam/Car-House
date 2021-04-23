using Microsoft.AspNetCore.Mvc;



namespace Car_House.Controllers
{
    public class CarController: Controller
    {
        public IActionResult Create(){
            return View();
        }
    }
}