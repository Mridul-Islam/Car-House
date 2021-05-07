using System;
using System.Collections.Generic;
using System.Linq;
using Car_House.Models;

namespace Car_House.Models
{
    public class CCarRepository: ICarRepository
    {

        // private List<Car> _CarList;
        private CarDbContext _context;

        public CCarRepository(CarDbContext context)
        {
            this._context = context;

            // _CarList = new List<Car>(){
            //     new Car() {
            //         CarID = 1, CarDescription="good", Model="a",
            //         BrandName="b", Color="c", Transmission=Transmission.Manual,
            //         Condition = Condition.New, FuelType = FuelType.Diesel, GearType=GearType.Automatic,
            //         BodyType = "d", EngineType = EngineType.Straight, NoOfSeats = 5,
            //         Price = 5000000, Mileage = 50, Category = Category.Sedan, Images="f",
            //         DisplayImage="g", SteeringType = SteeringType.PowerSteering 
            //     },
            //     new Car() {
            //         CarID = 2, CarDescription="this is good", Model="ok",
            //         BrandName="hmm", Color="c", Transmission=Transmission.Manual,
            //         Condition = Condition.New, FuelType = FuelType.Diesel, GearType=GearType.Automatic,
            //         BodyType = "d", EngineType = EngineType.Straight, NoOfSeats = 5,
            //         Price = 7000000, Mileage = 50, Category = Category.Sport, Images="f",
            //         DisplayImage="g", SteeringType = SteeringType.PowerSteering 
            //     }
            // };
        }

        public Car GetCar(int id){
            return _context.CarList.Find(id);
            
            //return _CarList.FirstOrDefault(e=>e.CarID == id);
        }

        public IEnumerable<Car> GetAllCar(){
            return _context.CarList;
            
            //return _CarList;
        }

        public Car Add(Car car){
            _context.CarList.Add(car);
            _context.SaveChanges();
            return car;


            // car.CarID = _CarList.Max(e => e.CarID) +1;
            // _CarList.Add(car);
            // return car;
        }

        public Car Update(Car carChanges){
            var car = _context.CarList.Attach(carChanges);
            car.State = Microsoft.EntityFrameworkCore.EntityState.Modified;
            _context.SaveChanges();
            return carChanges;
            
            
            // Car car = _CarList.FirstOrDefault(e => e.CarID == carChanges.CarID);
            // if(car !=null){
            //     car.CarDescription = carChanges.CarDescription;
            //     car.Model = carChanges.Model;
            //     car.BrandName = carChanges.BrandName;
            //     car.Color = carChanges.Color;
            //     car.Transmission = carChanges.Transmission;
            //     car.Condition = carChanges.Condition;
            //     car.FuelType = carChanges.FuelType;
            //     car.GearType = carChanges.GearType;
            //     car.BodyType = carChanges.BodyType;
            //     car.EngineType= carChanges.EngineType;
            //     car.NoOfSeats = carChanges.NoOfSeats;
            //     car.Price = carChanges.Price;
            //     car.Mileage = carChanges.Mileage;
            //     car.Category = carChanges.Category;
            //     car.SteeringType = carChanges.SteeringType;
            //     car.Images = carChanges.Images;
            // }
            // return car;
        }

        public Car Delete(int id){
            Car car = _context.CarList.Find(id);
            if(car != null){
                _context.CarList.Remove(car);
                _context.SaveChanges();
            }
            return car;
            
            // Car car = _CarList.FirstOrDefault(e => e.CarID == id);
            // if(car != null){
            //     _CarList.Remove(car);
            // }
            // return car;
        }


    }
}