using System.ComponentModel.DataAnnotations;
using Car_House.Models;
using System.Collections.Generic;


namespace Car_House.ViewModels
{
    public class AddNewCarViewModel
    {
        public int CarID {get; set; }
        [Display(Name="Car Description")]
        public string CarDescription {get; set; }
        public string Model {get; set; }
        [Display(Name="Brand ID")]
        public int BrandID {get; set; }
        [Display(Name="Brand Name")]
        public string BrandName {get; set; }
        public string Color {get; set; }
        public Transmission Transmission {get; set; }
        public Condition Condition {get; set; }
        public FuelType FuelType {get; set; }
        public GearType GearType {get; set; }
        public string BodyType {get; set; }
        public EngineType EngineType {get; set; }
        [Display(Name="No Of Seats")]
        public int NoOfSeats {get; set; }
        public decimal Price {get; set; }
        public decimal Mileage {get; set; }
        public Category Category {get; set; }
        public SteeringType SteeringType {get; set; }
        public ICollection<Image> Images {get; set; }
        public string DisplayImage {get; set; }
    }
}