using System;
using System.Collections.Generic;
using System.Linq;
using Car_House.Models;

namespace Car_House.Models
{
    public class CCarRepository: ICarRepository
    {
        private CarDbContext _context;

        public CCarRepository(CarDbContext context)
        {
            this._context = context;
        }

        public Car GetCar(int id){
            return _context.CarList.Find(id);
        }

        public IEnumerable<Car> GetAllCar(){
            return _context.CarList;
        }

        public Car Add(Car car){
            _context.CarList.Add(car);
            _context.SaveChanges();
            return car;
        }

        public Car Update(Car carChanges){
            var car = _context.CarList.Attach(carChanges);
            car.State = Microsoft.EntityFrameworkCore.EntityState.Modified;
            _context.SaveChanges();
            return carChanges;
        }

        public Car Delete(int id){
            Car car = _context.CarList.Find(id);
            if(car != null){
                _context.CarList.Remove(car);
                _context.SaveChanges();
            }
            return car;
        }

        public UpdateUser Modify(UpdateUser userChanges){
            var user = _context.Users.Attach(userChanges);
            user.State = Microsoft.EntityFrameworkCore.EntityState.Modified;
            _context.SaveChanges();
            return userChanges;
        }
        public UpdateUser GetUser(string name){
            return _context.Users.FirstOrDefault(x => x.UserName == name);
            //return _context.Users.Find(id);
            //return _context.Users.FirstOrDefault(x => x.UserName == id);
        }
        public UpdateUser DeleteUser(string name){
            UpdateUser user = _context.Users.FirstOrDefault(x => x.UserName == name);
            if(user != null){
                _context.Users.Remove(user);
                _context.SaveChanges();
            }
            return user;
        }


    }
}