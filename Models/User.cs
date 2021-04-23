



namespace Car_House.Models
{
    public class User
    {
        public string UserID{get; set;}
        public string FirstName{get; set;}
        public string LastName{get; set;}
        public string SecurityQuestion{get; set;}
        public byte[] PasswordHash{get; set;}
        public byte[] PasswordSalt{get; set;}
        public string ProfilePicture{get; set;}
    }
}