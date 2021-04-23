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