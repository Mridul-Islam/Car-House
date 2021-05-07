using System.Collections.Generic;




namespace Car_House.Models
{
    public interface ICarRepository
    {
        Car GetCar(int id);
        IEnumerable<Car> GetAllCar();
        Car Add(Car car);
        Car Update(Car carChanges);
        Car Delete(int id);
    }
}