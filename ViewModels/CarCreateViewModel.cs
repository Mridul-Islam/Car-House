using System.ComponentModel.DataAnnotations;
using Car_House.Models;
using Microsoft.AspNetCore.Http;
using System.Collections.Generic;


namespace Car_House.ViewModels
{
    public class CarCreateViewModel
    {
        [Required]
        [Display(Name="Car Description")]
        public string CarDescription {get; set; }

        [Required]
        public string Model {get; set; }
        [Required]
        [Display(Name="Brand Name")]
        public string BrandName {get; set; }

        [Required]
        public string Color {get; set; }

        [Required]
        public Transmission? Transmission {get; set; }

        [Required]
        public Condition? Condition {get; set; }
        
        [Required]
        public FuelType? FuelType {get; set; }
        
        [Required]
        public GearType? GearType {get; set; }
        public string BodyType {get; set; }
        
        [Required]
        public EngineType? EngineType {get; set; }

        [Required]
        [Display(Name="No Of Seats")]
        public int NoOfSeats {get; set; }

        [Required]
        public decimal Price {get; set; }

        [Required]
        public decimal Mileage {get; set; }
        
        [Required]
        public Category? Category {get; set; }
        
        [Required]
        public SteeringType? SteeringType {get; set; }
        public List<IFormFile> Images {get; set; } 
    }
}