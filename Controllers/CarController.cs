using Microsoft.AspNetCore.Mvc;
using Car_House.Models;
using Car_House.ViewModels;
using Microsoft.AspNetCore.Hosting;
using System.IO;
using System;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Authorization;
using System.Threading.Tasks;


namespace Car_House.Controllers
{
    [Authorize]
    public class CarController: Controller
    {
        private readonly ICarRepository _carRepository;
        private readonly IWebHostEnvironment _hostingEnvironment;
        public CarController(ICarRepository carRepository,
                            IWebHostEnvironment hostingEnvironment)
        {
            _carRepository = carRepository;
            _hostingEnvironment = hostingEnvironment;
        }

        public ViewResult Index(){
            var model =  _carRepository.GetAllCar();
            return View(model);
        }

        public string ProcessUploadedFile(CarCreateViewModel carModel){
            string uniqueFileName = null;
                if(carModel.Images!=null && carModel.Images.Count > 0){
                    foreach(IFormFile image in carModel.Images){
                        // WebRoot will help to reach to wwwroot folder
                        string uploadsFolder = Path.Combine(_hostingEnvironment.WebRootPath, "images");
                        //for uniquely recognize use the guid class
                        uniqueFileName = Guid.NewGuid().ToString() + "_" + image.FileName;
                        string filepath = Path.Combine(uploadsFolder, uniqueFileName);
                        using (var fileStream = new FileStream(filepath, FileMode.Create)){
                            image.CopyTo(fileStream);
                        }
                        
                    }
                }
                return uniqueFileName;
        }

        [HttpGet]
        public ViewResult Create(){
            return View();
        }

        [HttpPost]
        public IActionResult Create(CarCreateViewModel carModel){
            if(ModelState.IsValid){
                string uniqueFileName = ProcessUploadedFile(carModel);
                Car newCar = new Car{
                    CarDescription = carModel.CarDescription,
                    Model = carModel.Model,
                    BrandName = carModel.BrandName,
                    Color = carModel.Color,
                    Transmission = carModel.Transmission,
                    Condition = carModel.Condition,
                    FuelType = carModel.FuelType,
                    GearType = carModel.GearType,
                    BodyType = carModel.BodyType,
                    EngineType = carModel.EngineType,
                    NoOfSeats = carModel.NoOfSeats,
                    Price = carModel.Price,
                    Mileage = carModel.Mileage,
                    Category = carModel.Category,
                    SteeringType = carModel.SteeringType,
                    Images = uniqueFileName
                };
                _carRepository.Add(newCar);

                return RedirectToAction("index");
            }
            return View();
        }

        public ViewResult Details(int id){
            CarDetailsViewModel carDetailsViewModel = new CarDetailsViewModel()
            {
                Car = _carRepository.GetCar(id),
                PageTitle = "Car Details"
            };
            return View(carDetailsViewModel);
        }

        [HttpGet]
        public ViewResult Edit(int id){
            Car car = _carRepository.GetCar(id);
            //first retrieve the existing information for showing
            CarEditViewModel carEditViewModel = new CarEditViewModel
            {
                Id = car.CarID,
                CarDescription = car.CarDescription,
                Model = car.Model,
                BrandName = car.BrandName,
                Color = car.Color,
                Transmission = car.Transmission,
                Condition = car.Condition,
                FuelType = car.FuelType,
                GearType = car.GearType,
                BodyType = car.BodyType,
                EngineType = car.EngineType,
                NoOfSeats = car.NoOfSeats,
                Price = car.Price,
                Mileage = car.Mileage,
                Category = car.Category,
                SteeringType = car.SteeringType,
                ExistingImage = car.Images 
            };
            return View(carEditViewModel);
        }

        [HttpPost]
        public IActionResult Edit(CarEditViewModel carModel){
            if(ModelState.IsValid){
                Car car = _carRepository.GetCar(carModel.Id);
                
                car.CarDescription = carModel.CarDescription;
                car.Model = carModel.Model;
                car.BrandName = carModel.BrandName;
                car.Color = carModel.Color;
                car.Transmission = carModel.Transmission;
                car.Condition = carModel.Condition;
                car.FuelType = carModel.FuelType;
                car.GearType = carModel.GearType;
                car.BodyType = carModel.BodyType;
                car.EngineType = carModel.EngineType;
                car.NoOfSeats = carModel.NoOfSeats;
                car.Price = carModel.Price;
                car.Mileage = carModel.Mileage;
                car.Category = carModel.Category;
                car.SteeringType = carModel.SteeringType;
                if(carModel.Images != null){
                    if(carModel.ExistingImage != null){
                        string filePath = Path.Combine(_hostingEnvironment.WebRootPath,"images",
                            carModel.ExistingImage);
                        System.IO.File.Delete(filePath);
                    }
                    car.Images = ProcessUploadedFile(carModel);
                }

                _carRepository.Update(car);

                return RedirectToAction("index");
            }
            return View();
        }

        [HttpGet]
        public IActionResult Delete(int id)
        {
            var car = _carRepository.GetCar(id);

            return View(car);
        }


        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public IActionResult DeleteConfirmed(int id)
        {
            
            //var car = _carRepository.GetCar(id);
            _carRepository.Delete(id);
            return RedirectToAction(nameof(Index));
        }




    }
}