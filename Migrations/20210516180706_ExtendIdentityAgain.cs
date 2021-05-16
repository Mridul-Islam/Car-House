using Microsoft.EntityFrameworkCore.Migrations;

namespace Car_House.Migrations
{
    public partial class ExtendIdentityAgain : Migration
    {
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.AddColumn<string>(
                name: "ProfilePicture",
                table: "AspNetUsers",
                nullable: true);

            migrationBuilder.UpdateData(
                table: "CarList",
                keyColumn: "CarID",
                keyValue: 1,
                column: "Images",
                value: null);

            migrationBuilder.UpdateData(
                table: "CarList",
                keyColumn: "CarID",
                keyValue: 2,
                column: "Images",
                value: null);
        }

        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropColumn(
                name: "ProfilePicture",
                table: "AspNetUsers");

            migrationBuilder.UpdateData(
                table: "CarList",
                keyColumn: "CarID",
                keyValue: 1,
                column: "Images",
                value: "~/images/gdCar.jpg");

            migrationBuilder.UpdateData(
                table: "CarList",
                keyColumn: "CarID",
                keyValue: 2,
                column: "Images",
                value: "~/images/gdCar.jpg");
        }
    }
}
