using System.ComponentModel.DataAnnotations;
using System.Collections.Generic;


namespace Car_House.Models
{

    public enum Transmission
    {
        Manual,
        Automatic,
        [Display(Name="Semi Automatic")]
        SemiAutomatic,
        Other
    }
    public enum Condition
    {
        New, 
        Used, 
        [Display(Name="Pre Owned")]
        PreOwned, 
        Recondition, 
        Other
    }
    public enum FuelType
    {
        Gas,
        Diesel,
        Petrol,
        Octane,
        Electricity,
        Other
    }
    public enum GearType
    {
        Automatic,
        Manual,
        Dual
    }
    public enum EngineType
    {
        Inline, 
        Straight,
        VEE,
        Flat,
        [Display(Name="VR&W")]
        VRAndW,
        Other
    }
    public enum Category
    {
        Sedan,
        Suv,
        Sport,
        Minivan
    }
    public enum SteeringType
    {
        PowerSteering, 
        ManualSteering
    }


    public class Car
    {
        public int CarID {get; set; }

        [Required]
        [Display(Name="Car Description")]
        public string CarDescription {get; set; }

        [Required]
        public string Model {get; set; }
        [Display(Name="Brand ID")]

        public int BrandID {get; set; }

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

        //[Required]
        //public ICollection<Image> Images {get; set; }
        public string Images {get; set; }

        public string DisplayImage {get; set; }
    }
}