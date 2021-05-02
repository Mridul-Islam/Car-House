using System;
using Microsoft.AspNetCore.Mvc;
using Car_House.ViewModels;
using Car_House.Models;
// for  IFormFile
using Microsoft.AspNetCore.Http;
//for using the path class
using System.IO;
//for use IWebHostEnvironmetn
using Microsoft.AspNetCore.Hosting;



namespace Car_House.Controllers
{
    public class CarController: Controller
    {

        
        private readonly ICarRepository _CarRepository;
        private readonly IWebHostEnvironment _hostingEnvironment;
        public CarController(IWebHostEnvironment hostingEnvironment,
                                ICarRepository CarRepository)
        {
            _CarRepository = CarRepository;
            this._hostingEnvironment = hostingEnvironment;
        }


        public IActionResult Index(){
            return View();
        }

        [HttpGet]
        public IActionResult Create(){
            return View();
        }

        private string ProcessUploadedFile(AddNewCarViewModel newmodel){
            string uniqueFileName = null;
                if(newmodel.Images != null && newmodel.Images.Count > 0){
                    foreach(IFormFile image in newmodel.Images){
                        string uploadsFolder = Path.Combine(_hostingEnvironment.WebRootPath, "images");
                        //for ensure unoque name in photo field.. we will use Guid (global unique identifier)
                        //uniqueFileName = Guid.NewGuid().ToString() + "_" + model.Photos.FileName;
                        uniqueFileName = Guid.NewGuid().ToString() + "_" + image.FileName;
                        string filePath = Path.Combine(uploadsFolder, uniqueFileName);
                        //model.Photos.CopyTo(new FileStream(filePath, FileMode.Create));
                        using (var fileStream = new FileStream(filePath, FileMode.Create))
                        {
                            image.CopyTo(fileStream);
                        }
                        // at that point we have the uploaded photo in images folder.....
                    }
                }
                return uniqueFileName;
        }

        [HttpPost]
        public IActionResult Create(AddNewCarViewModel newmodel){
            if(ModelState.IsValid){
                string uniqueFileName = ProcessUploadedFile(newmodel);
                Car newCar = new Car{
                    CarDescription = newmodel.CarDescription,
                    Model = newmodel.Model,
                    BrandID = newmodel.BrandID,
                    BrandName = newmodel.BrandName,
                    Color = newmodel.Color,
                    Transmission = newmodel.Transmission,
                    Condition = newmodel.Condition,
                    FuelType = newmodel.FuelType,
                    GearType = newmodel.GearType,
                    BodyType = newmodel.BodyType,
                    EngineType = newmodel.EngineType,
                    NoOfSeats = newmodel.NoOfSeats,
                    Price = newmodel.Price,
                    Mileage = newmodel.Mileage,
                    Category = newmodel.Category,
                    SteeringType = newmodel.SteeringType,
                    Images = uniqueFileName
                };
                _CarRepository.Add(newCar);
                //return RedirectToAction("index", "Car");
            }
            return View();
        }


    }
}