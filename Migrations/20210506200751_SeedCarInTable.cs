using Microsoft.EntityFrameworkCore.Migrations;

namespace Car_House.Migrations
{
    public partial class SeedCarInTable : Migration
    {
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.InsertData(
                table: "CarList",
                columns: new[] { "CarID", "BodyType", "BrandID", "BrandName", "CarDescription", "Category", "Color", "Condition", "DisplayImage", "EngineType", "FuelType", "GearType", "Images", "Mileage", "Model", "NoOfSeats", "Price", "SteeringType", "Transmission" },
                values: new object[] { 1, "d", 0, "Audi", "this is Audi", 0, "black", 0, null, 1, 1, 0, null, 50m, "Audi a1 ambition", 5, 5000000m, 0, 0 });

            migrationBuilder.InsertData(
                table: "CarList",
                columns: new[] { "CarID", "BodyType", "BrandID", "BrandName", "CarDescription", "Category", "Color", "Condition", "DisplayImage", "EngineType", "FuelType", "GearType", "Images", "Mileage", "Model", "NoOfSeats", "Price", "SteeringType", "Transmission" },
                values: new object[] { 2, "d", 0, "BMW", "this is BMW", 2, "silver", 0, null, 1, 1, 0, null, 50m, "BMW-1", 5, 7000000m, 0, 0 });
        }

        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DeleteData(
                table: "CarList",
                keyColumn: "CarID",
                keyValue: 1);

            migrationBuilder.DeleteData(
                table: "CarList",
                keyColumn: "CarID",
                keyValue: 2);
        }
    }
}
