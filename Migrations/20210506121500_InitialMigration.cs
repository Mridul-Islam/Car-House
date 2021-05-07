using Microsoft.EntityFrameworkCore.Migrations;

namespace Car_House.Migrations
{
    public partial class InitialMigration : Migration
    {
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.CreateTable(
                name: "CarList",
                columns: table => new
                {
                    CarID = table.Column<int>(nullable: false)
                        .Annotation("Sqlite:Autoincrement", true),
                    CarDescription = table.Column<string>(nullable: false),
                    Model = table.Column<string>(nullable: false),
                    BrandID = table.Column<int>(nullable: false),
                    BrandName = table.Column<string>(nullable: false),
                    Color = table.Column<string>(nullable: false),
                    Transmission = table.Column<int>(nullable: false),
                    Condition = table.Column<int>(nullable: false),
                    FuelType = table.Column<int>(nullable: false),
                    GearType = table.Column<int>(nullable: false),
                    BodyType = table.Column<string>(nullable: true),
                    EngineType = table.Column<int>(nullable: false),
                    NoOfSeats = table.Column<int>(nullable: false),
                    Price = table.Column<decimal>(nullable: false),
                    Mileage = table.Column<decimal>(nullable: false),
                    Category = table.Column<int>(nullable: false),
                    SteeringType = table.Column<int>(nullable: false),
                    Images = table.Column<string>(nullable: true),
                    DisplayImage = table.Column<string>(nullable: true)
                },
                constraints: table =>
                {
                    table.PrimaryKey("PK_CarList", x => x.CarID);
                });
        }

        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropTable(
                name: "CarList");
        }
    }
}
