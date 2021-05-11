using Microsoft.EntityFrameworkCore.Migrations;

namespace Car_House.Migrations
{
    public partial class ExtendIdentityUser : Migration
    {
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.AddColumn<string>(
                name: "FirstName",
                table: "AspNetUsers",
                nullable: true,
                defaultValue: "");

            migrationBuilder.AddColumn<string>(
                name: "LastName",
                table: "AspNetUsers",
                nullable: true,
                defaultValue: "");

            // migrationBuilder.UpdateData(
            //     table: "CarList",
            //     keyColumn: "CarID",
            //     keyValue: 1,
            //     column: "Images",
            //     value: "~/images/gdCar.jpg");

            // migrationBuilder.UpdateData(
            //     table: "CarList",
            //     keyColumn: "CarID",
            //     keyValue: 2,
            //     column: "Images",
            //     value: "~/images/gdCar.jpg");
        }

        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropColumn(
                name: "FirstName",
                table: "AspNetUsers");

            migrationBuilder.DropColumn(
                name: "LastName",
                table: "AspNetUsers");

            // migrationBuilder.UpdateData(
            //     table: "CarList",
            //     keyColumn: "CarID",
            //     keyValue: 1,
            //     column: "Images",
            //     value: null);

            // migrationBuilder.UpdateData(
            //     table: "CarList",
            //     keyColumn: "CarID",
            //     keyValue: 2,
            //     column: "Images",
            //     value: null);
        }
    }
}
