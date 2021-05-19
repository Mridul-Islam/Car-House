using Microsoft.EntityFrameworkCore;


namespace Car_House.Models
{
    public static class ModelBuilderExtensions
    {
        public static void Seed(this ModelBuilder modelBuilder){
            modelBuilder.Entity<Car>().HasData(
                new Car{
                    CarID = 1, CarDescription="this is Audi", Model="Audi a1 ambition",
                    BrandName="Audi", Color="black", Transmission=Transmission.Manual,
                    Condition = Condition.New, FuelType = FuelType.Diesel, GearType=GearType.Automatic,
                    BodyType = "d", EngineType = EngineType.Straight, NoOfSeats = 5,
                    Price = 5000000, Mileage = 50, Category = Category.Sedan,
                    SteeringType = SteeringType.PowerSteering
                },
                new Car{
                    CarID = 2, CarDescription="this is BMW", Model="BMW-1",
                    BrandName="BMW", Color="silver", Transmission=Transmission.Manual,
                    Condition = Condition.New, FuelType = FuelType.Diesel, GearType=GearType.Automatic,
                    BodyType = "d", EngineType = EngineType.Straight, NoOfSeats = 5,
                    Price = 7000000, Mileage = 50, Category = Category.Sport,
                    SteeringType = SteeringType.PowerSteering
                }
            );
            // modelBuilder.Entity<UpdateUser>().HasData(
            //     new UpdateUser{
            //         FirstName = "Mridul", LastName = "Islam", UserName = "Md.mridulislam12345@gmail.com",
            //         Email = "Md.mridulislam12345@gmail.com", PasswordHash="Mridul@5701610947"
            //     }
            // );
        }
    }
}