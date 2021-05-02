using Microsoft.EntityFrameworkCore;


namespace Car_House.Models
{
    public class CarDbContext: DbContext
    {
        public CarDbContext(DbContextOptions<CarDbContext> options)
        : base(options)
        {
        }

        public DbSet<Car> CarList { get; set; }
    }
}

