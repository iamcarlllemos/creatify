<?php

namespace Database\Seeders;

use App\Models\SkillsList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class skills_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            "Front End Development",
            "Back End Development",
            "Full Stack Development",
            "UI/UX Design",
            "Quality Assurance",
            "Project Management",
            "Data Analysis",
            "Data Science",
            "Machine Learning",
            "DevOps",
            "Cloud Computing",
            "Cybersecurity",
            "Mobile App Development",
            "Database Administration",
            "Network Administration",
            "Technical Support",
            "System Administration",
            "Product Management",
            "Business Analysis",
            "Content Creation",
            "Digital Marketing",
            "SEO",
            "SEM",
            "Social Media Management",
            "Copywriting",
            "Graphic Design",
            "Video Editing",
            "3D Modeling",
            "Game Development",
            "Blockchain Development",
            "Artificial Intelligence",
            "Natural Language Processing",
            "Robotics",
            "Embedded Systems",
            "Sales",
            "Customer Service",
            "Human Resources",
            "Recruiting",
            "Training and Development",
            "Financial Analysis",
            "Accounting",
            "Legal Expertise",
            "Compliance",
            "Supply Chain Management",
            "Logistics",
            "Procurement",
            "Operations Management",
            "Research and Development",
            "Technical Writing",
            "Public Relations",
            "Event Planning",
            "Fundraising",
            "Nonprofit Management",
            "Healthcare Administration",
            "Medical Billing and Coding",
            "Pharmacy",
            "Nursing",
            "Clinical Research",
            "Real Estate",
            "Construction Management",
            "Architecture",
            "Interior Design",
            "Landscape Architecture",
            "Urban Planning",
            "Environmental Science",
            "Renewable Energy",
            "Agriculture",
            "Forestry",
            "Veterinary Medicine",
            "Education",
            "Curriculum Development",
            "E-Learning",
            "Instructional Design",
            "Library Science",
            "Translation",
            "Interpretation",
            "Linguistics",
            "Cultural Anthropology",
            "History",
            "Sociology",
            "Psychology",
            "Counseling",
            "Social Work",
            "Fitness Training",
            "Nutrition",
            "Sports Coaching",
            "Music Production",
            "Acting",
            "Directing",
            "Screenwriting",
            "Photography",
            "Journalism",
            "Broadcasting",
            "Public Speaking",
            "Negotiation",
            "Conflict Resolution",
            "Leadership",
            "Team Management",
            "Strategic Planning",
            "Risk Management",
            "Innovation",
            "Entrepreneurship",
            "Venture Capital",
            "Investment Banking",
            "Stock Trading",
            "Videography",
            "Content Creation",
            "Live Selling",
            "Brand Ambassadorship",
            "Influencer Marketing",
            "Podcasting",
            "E-commerce Management",
            "Customer Relationship Management",
            "Sales Strategy",
            "Market Research",
            "Advertising",
            "Media Planning",
            "Fashion Design",
            "Personal Styling",
            "Makeup Artistry",
            "Hair Styling",
            "Cosmetology",
            "Tattoo Artistry",
            "Handcrafting",
            "Baking",
            "Culinary Arts",
            "Mixology",
            "Bartending",
            "Travel Planning",
            "Tour Guiding",
            "Event Hosting",
            "Stand-up Comedy",
            "Voice Acting",
            "Screenwriting",
            "Literary Writing",
            "Poetry",
            "Editing",
            "Proofreading",
            "Ghostwriting",
            "Resume Writing",
            "Career Coaching"
        ];
          
        foreach($items as $item) {
            SkillsList::insert([
                'name' => $item
            ]);
        }
        
    }
}
