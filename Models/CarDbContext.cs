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
        public DbSet<Brand> BrandList { get; set; }
        public DbSet<User> UserList { get; set; }
        public DbSet<Image> ImageList { get; set; }
    }
}

