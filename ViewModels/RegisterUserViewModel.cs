using System.ComponentModel.DataAnnotations;
using Microsoft.AspNetCore.Mvc;



namespace Car_House.ViewModels
{
    public class RegisterUserViewModel
    {
        [Required]
        [Display(Name = "First Name")]
        public string FirstName{get; set;}

        [Required]
        [Display(Name = "Last Name")]
        public string LastName{get; set;}

        [Required]
        [EmailAddress]
        [Remote(action:"IsEmailInUse", controller:"User")]
        public string Email{get; set;}

        [Required]
        [DataType(DataType.Password)]
        public string Password{get; set;}

        [DataType(DataType.Password)]
        [Display(Name = "Confirm Password")]
        [Compare("Password", 
        ErrorMessage = "password and confirm password do not match")]
        public string ConfirmPassword{get; set;}
    }
}