
using Car_House.Models;

namespace Car_House.Models
{
    public class CCarRepository: ICarRepository
    {
        private readonly CarDbContext _context;
        public CCarRepository(CarDbContext context){
            this._context = context;
        }
        public Car Add(Car car){
            _context.CarList.Add(car);
            _context.SaveChanges();
            return car;
        }
    }
}