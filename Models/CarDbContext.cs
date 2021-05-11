using Microsoft.EntityFrameworkCore;
using Microsoft.AspNetCore.Identity.EntityFrameworkCore;


namespace Car_House.Models
{
    public class CarDbContext: IdentityDbContext<UpdateUser>
    {
        public CarDbContext(DbContextOptions<CarDbContext> options)
            :base(options)
        {
            
        }

        public DbSet<Car> CarList {get; set; }

        // for seed data
        protected override void OnModelCreating(ModelBuilder modelBuilder)
        {
            base.OnModelCreating(modelBuilder);
            modelBuilder.Seed();
        }

    }
}