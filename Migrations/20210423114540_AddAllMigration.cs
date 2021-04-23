using System;
using Microsoft.EntityFrameworkCore.Migrations;

namespace Car_House.Migrations
{
    public partial class AddAllMigration : Migration
    {
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.CreateTable(
                name: "BrandList",
                columns: table => new
                {
                    BrandID = table.Column<int>(nullable: false)
                        .Annotation("Sqlite:Autoincrement", true),
                    BrandName = table.Column<string>(nullable: true)
                },
                constraints: table =>
                {
                    table.PrimaryKey("PK_BrandList", x => x.BrandID);
                });

            migrationBuilder.CreateTable(
                name: "UserList",
                columns: table => new
                {
                    UserID = table.Column<string>(nullable: false),
                    FirstName = table.Column<string>(nullable: true),
                    LastName = table.Column<string>(nullable: true),
                    SecurityQuestion = table.Column<string>(nullable: true),
                    PasswordHash = table.Column<byte[]>(nullable: true),
                    PasswordSalt = table.Column<byte[]>(nullable: true),
                    ProfilePicture = table.Column<string>(nullable: true)
                },
                constraints: table =>
                {
                    table.PrimaryKey("PK_UserList", x => x.UserID);
                });

            migrationBuilder.CreateTable(
                name: "CarList",
                columns: table => new
                {
                    CarID = table.Column<int>(nullable: false)
                        .Annotation("Sqlite:Autoincrement", true),
                    CarDescription = table.Column<string>(nullable: true),
                    Model = table.Column<string>(nullable: true),
                    BrandID = table.Column<int>(nullable: false),
                    BrandName = table.Column<string>(nullable: true),
                    Color = table.Column<string>(nullable: true),
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
                    DisplayImage = table.Column<string>(nullable: true)
                },
                constraints: table =>
                {
                    table.PrimaryKey("PK_CarList", x => x.CarID);
                    table.ForeignKey(
                        name: "FK_CarList_BrandList_BrandID",
                        column: x => x.BrandID,
                        principalTable: "BrandList",
                        principalColumn: "BrandID",
                        onDelete: ReferentialAction.Cascade);
                });

            migrationBuilder.CreateTable(
                name: "ImageList",
                columns: table => new
                {
                    ImageID = table.Column<int>(nullable: false)
                        .Annotation("Sqlite:Autoincrement", true),
                    ImageLocation = table.Column<string>(nullable: true),
                    CarID = table.Column<string>(nullable: true),
                    CarID1 = table.Column<int>(nullable: true)
                },
                constraints: table =>
                {
                    table.PrimaryKey("PK_ImageList", x => x.ImageID);
                    table.ForeignKey(
                        name: "FK_ImageList_CarList_CarID1",
                        column: x => x.CarID1,
                        principalTable: "CarList",
                        principalColumn: "CarID",
                        onDelete: ReferentialAction.Restrict);
                });

            migrationBuilder.CreateIndex(
                name: "IX_CarList_BrandID",
                table: "CarList",
                column: "BrandID");

            migrationBuilder.CreateIndex(
                name: "IX_ImageList_CarID1",
                table: "ImageList",
                column: "CarID1");
        }

        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropTable(
                name: "ImageList");

            migrationBuilder.DropTable(
                name: "UserList");

            migrationBuilder.DropTable(
                name: "CarList");

            migrationBuilder.DropTable(
                name: "BrandList");
        }
    }
}
