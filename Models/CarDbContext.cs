using Microsoft.EntityFrameworkCore;


namespace Car_House.Models
{
    public class CarDbContext: DbContext
    {
        public CarDbContext(DbContextOptions<CarDbContext> options)
            :base(options)
        {
            
        }

        public DbSet<Car> CarList {get; set; }

        // for seed data
        protected override void OnModelCreating(ModelBuilder modelBuilder)
        {
            modelBuilder.Seed();
        }

    }
}