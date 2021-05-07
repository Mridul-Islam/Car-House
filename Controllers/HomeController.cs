using System;
using System.Collections.Generic;
using System.Diagnostics;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.Extensions.Logging;
using Car_House.Models;
using Car_House.ViewModels;

namespace Car_House.Controllers
{
    public class HomeController : Controller
    {
        private readonly ILogger<HomeController> _logger;
        private readonly ICarRepository _carRepository;
        public HomeController(ILogger<HomeController> logger,
                                ICarRepository carRepository)
        {
            _logger = logger;
            _carRepository = carRepository;
        }

        public ViewResult Index()
        {
            var model = _carRepository.GetAllCar();
            return View(model);
        }

        public ViewResult Details(int id){
            CarDetailsViewModel carDetailsViewModel = new CarDetailsViewModel()
            {
                Car = _carRepository.GetCar(id),
                PageTitle = "Car Details"
            };
            return View(carDetailsViewModel);
        }

        public IActionResult Privacy()
        {
            return View();
        }

        [ResponseCache(Duration = 0, Location = ResponseCacheLocation.None, NoStore = true)]
        public IActionResult Error()
        {
            return View(new ErrorViewModel { RequestId = Activity.Current?.Id ?? HttpContext.TraceIdentifier });
        }
    }
}
