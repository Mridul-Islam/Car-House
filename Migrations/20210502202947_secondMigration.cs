using System;
using Microsoft.EntityFrameworkCore.Migrations;

namespace Car_House.Migrations
{
    public partial class secondMigration : Migration
    {
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropForeignKey(
                name: "FK_CarList_BrandList_BrandID",
                table: "CarList");

            migrationBuilder.DropTable(
                name: "BrandList");

            migrationBuilder.DropTable(
                name: "ImageList");

            migrationBuilder.DropTable(
                name: "UserList");

            migrationBuilder.DropIndex(
                name: "IX_CarList_BrandID",
                table: "CarList");

            migrationBuilder.AddColumn<string>(
                name: "Images",
                table: "CarList",
                nullable: true);
        }

        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropColumn(
                name: "Images",
                table: "CarList");

            migrationBuilder.CreateTable(
                name: "BrandList",
                columns: table => new
                {
                    BrandID = table.Column<int>(type: "INTEGER", nullable: false)
                        .Annotation("Sqlite:Autoincrement", true),
                    BrandName = table.Column<string>(type: "TEXT", nullable: true)
                },
                constraints: table =>
                {
                    table.PrimaryKey("PK_BrandList", x => x.BrandID);
                });

            migrationBuilder.CreateTable(
                name: "ImageList",
                columns: table => new
                {
                    ImageID = table.Column<int>(type: "INTEGER", nullable: false)
                        .Annotation("Sqlite:Autoincrement", true),
                    CarID = table.Column<string>(type: "TEXT", nullable: true),
                    CarID1 = table.Column<int>(type: "INTEGER", nullable: true),
                    ImageLocation = table.Column<string>(type: "TEXT", nullable: true)
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

            migrationBuilder.CreateTable(
                name: "UserList",
                columns: table => new
                {
                    UserID = table.Column<string>(type: "TEXT", nullable: false),
                    FirstName = table.Column<string>(type: "TEXT", nullable: true),
                    LastName = table.Column<string>(type: "TEXT", nullable: true),
                    PasswordHash = table.Column<byte[]>(type: "BLOB", nullable: true),
                    PasswordSalt = table.Column<byte[]>(type: "BLOB", nullable: true),
                    ProfilePicture = table.Column<string>(type: "TEXT", nullable: true),
                    SecurityQuestion = table.Column<string>(type: "TEXT", nullable: true)
                },
                constraints: table =>
                {
                    table.PrimaryKey("PK_UserList", x => x.UserID);
                });

            migrationBuilder.CreateIndex(
                name: "IX_CarList_BrandID",
                table: "CarList",
                column: "BrandID");

            migrationBuilder.CreateIndex(
                name: "IX_ImageList_CarID1",
                table: "ImageList",
                column: "CarID1");

            migrationBuilder.AddForeignKey(
                name: "FK_CarList_BrandList_BrandID",
                table: "CarList",
                column: "BrandID",
                principalTable: "BrandList",
                principalColumn: "BrandID",
                onDelete: ReferentialAction.Cascade);
        }
    }
}
