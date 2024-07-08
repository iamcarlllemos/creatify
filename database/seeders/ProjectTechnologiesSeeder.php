<?php

namespace Database\Seeders;

use App\Models\ProjectTechnologies;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectTechnologiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $web_development = [
            "HTML5", "CSS3", "JavaScript", "TypeScript", "React", "Angular", "Vue.js", "jQuery", "Bootstrap",
            "Tailwind CSS", "Sass", "Less", "PHP", "Laravel", "Symfony", "CodeIgniter", "Node.js", "Express.js",
            "Django", "Flask", "Ruby on Rails", "ASP.NET", "MongoDB", "MySQL", "PostgreSQL", "Firebase", "GraphQL",
            "REST API", "WebSocket", "Git", "GitHub", "Bitbucket", "JIRA", "VSCode", "Sublime Text", "Atom",
            "PHPStorm", "WebStorm", "Adobe Dreamweaver", "Netlify", "Heroku", "DigitalOcean", "AWS", "Azure",
            "Google Cloud Platform", "Nginx", "Apache HTTP Server", "Docker", "Kubernetes"
        ];

        $data_analysis = [
            "Python", "R", "SQL", "Pandas", "NumPy", "SciPy", "Matplotlib", "Seaborn", "Plotly", "Jupyter Notebook",
            "Tableau", "Power BI", "Excel", "Google Sheets", "MongoDB", "MySQL", "PostgreSQL", "SQLite", "Hadoop",
            "Spark", "AWS Glue", "DataRobot", "RapidMiner", "KNIME", "SAS", "IBM SPSS", "Apache Kafka", "TensorFlow",
            "PyTorch", "Scikit-learn", "Keras", "MLflow", "Databricks", "Microsoft Azure", "Google BigQuery",
            "Alteryx", "Qlik Sense", "Apache Airflow", "Splunk", "Sisense", "D3.js", "Looker", "Dataiku", "Cognos Analytics",
            "Redash", "Hive", "Snowflake"
        ];

        $graphic_design = [
            "Adobe Photoshop", "Adobe Illustrator", "Adobe InDesign", "Adobe XD", "Sketch", "Figma", "CorelDRAW",
            "Affinity Designer", "Inkscape", "GIMP", "Canva", "Piktochart", "Visme", "Blender", "AutoCAD",
            "3ds Max", "Maya", "Cinema 4D", "QuarkXPress", "Gravit Designer", "Adobe Spark", "Vectr", "Lunacy",
            "Paint.NET", "Krita", "Serif DrawPlus", "Xara Designer Pro", "Adobe After Effects", "Premiere Pro",
            "Final Cut Pro", "DaVinci Resolve", "Camtasia", "HitFilm Express", "Lightworks", "Avid Media Composer",
            "Motion", "Nuke", "Shotcut", "Sony Vegas Pro", "Corel VideoStudio", "CyberLink PowerDirector", "LumaFusion",
            "VideoPad", "OpenShot", "Blender Video Editing", "Vegas Movie Studio", "Adobe Premiere Rush", "Magix Movie Edit Pro"
        ];

        $machine_learning = [
            "Python", "R", "Java", "Scala", "C++", "MATLAB", "TensorFlow", "PyTorch", "Scikit-learn", "Keras",
            "Apache Spark", "Hadoop", "Pandas", "NumPy", "SciPy", "NLTK", "OpenCV", "Microsoft Azure", "Google Cloud AI",
            "Amazon SageMaker", "IBM Watson", "MLflow", "Databricks", "Caffe", "Theano", "MXNet", "DeepLearning4j",
            "BigML", "Caret", "XGBoost", "LightGBM", "CatBoost", "H2O.ai", "Orange", "RapidMiner", "WEKA", "KNIME",
            "DataRobot", "SAS", "IBM SPSS Modeler", "Rattle", "AutoML", "Featuretools", "PyCaret", "Bayesian Optimization",
            "Neptune.ai", "DVC"
        ];

        $video_editing = [
            "Adobe Premiere Pro", "Final Cut Pro", "DaVinci Resolve", "Avid Media Composer", "Adobe After Effects",
            "HitFilm Express", "Lightworks", "Camtasia", "Vegas Pro", "Corel VideoStudio", "Pinnacle Studio", "Shotcut",
            "Filmora", "Magix Movie Edit Pro", "Kdenlive", "Blender Video Editing", "iMovie", "Windows Movie Maker",
            "CyberLink PowerDirector", "LumaFusion", "OpenShot", "Movavi Video Editor", "Adobe Premiere Rush", "FilmoraGo",
            "InShot", "Clideo", "VideoPad", "Wondershare Filmora X", "Apple Clips", "Corel MotionStudio 3D", "Nero Video",
            "HitFilm Pro", "MAGIX Video Pro X", "Lightworks Pro", "VideoStudio Ultimate", "Animotica", "VSDC Free Video Editor",
            "FlexClip", "KineMaster", "Adobe Spark Video", "WeVideo", "EZGif", "Apple iMovie", "PicPlayPost", "VideoScribe",
            "Shotcut Video Editor", "Wave.video", "Moovly Studio"
        ];

        $content_creation = [
            "Canva", "Adobe Creative Cloud", "Photoshop", "Illustrator", "InDesign", "Premiere Pro", "After Effects",
            "Lightroom", "Spark", "XD", "CorelDRAW", "Sketch", "Figma", "GIMP", "Blender", "Final Cut Pro", "Avid Media Composer",
            "DaVinci Resolve", "Cinema 4D", "PowerDirector", "Filmora", "Animoto", "Lumen5", "Powtoon", "Vyond", "Renderforest",
            "Visme", "Snappa", "Crello", "PicMonkey", "Venngage", "Infogram", "Easel.ly", "Placeit", "Stencil", "Moovly",
            "Kapwing", "Desygner", "Biteable", "Offeo", "Promo", "Magisto", "Clipchamp", "Wave.video", "BeFunky", "Pixlr",
            "DesignBold", "Canva Video Maker"
        ];

        $website_builder = [
            "Wix", "WordPress", "Squarespace", "Weebly", "Shopify", "Webflow", "Jimdo", "Duda", "BigCommerce", "GoDaddy Website Builder",
            "Zyro", "Tilda", "Strikingly", "Elementor", "Divi", "Thrive Architect", "Beaver Builder", "BoldGrid", "Ucraft",
            "SiteBuilder", "Site123", "Mozello", "1&1 IONOS Website Builder", "Voog", "Simvoly", "Zoho Sites", "Webnode", "IM Creator",
            "Yola", "Moonfruit", "Square Online Store", "IONOS by 1&1", "Format", "Carrd", "Pixpa", "SITE123", "Doodlekit", "Odoo",
            "Cindr", "Gator Website Builder", "XPRS", "PageCloud", "Zoho Creator", "SITE123", "8b", "Yola", "Jimdo Dolphin",
            "Yola Gold", "Voog", "Voog", "8b Website Builder"
        ];

        $game_development = [
            "Unity", "Unreal Engine", "Godot Engine", "CryEngine", "Lumberyard", "GameMaker Studio", "Construct",
            "RPG Maker", "Frostbite", "Decima", "HeroEngine", "Phaser", "GameSalad", "Clickteam Fusion", "Stencyl",
            "LibGDX", "Panda3D", "Torque", "Adventure Game Studio", "Haxe", "Ren'Py", "OpenFL", "Defold", "Orx", "Gamebryo",
            "Scirra Construct", "Love2D", "Oxygine", "GDevelop", "Pixel Game Maker MV", "AppGameKit", "Xenko",
            "Spring Engine", "XNA Framework", "RPG Toolkit", "Solar2D", "Allegro", "PICO-8", "ImpactJS", "CraftStudio",
            "Cocos2d", "Corona SDK", "Duality", "Wave Engine", "ShiVa", "Urho3D", "Blender Game Engine", "GameGuru",
            "Adventure Creator"
        ];
        
        $videography = [
            "Canon EOS R5", "Sony Alpha 7S III", "Panasonic Lumix GH5", "Blackmagic Pocket Cinema Camera 6K",
            "RED Komodo 6K", "DJI Ronin-S", "Zhiyun Crane 3 LAB", "Sachtler Flowtech 75", "Rode NTG4+", "Sennheiser MKH 416",
            "Zoom H6", "DJI Mavic Air 2", "GoPro Hero 10 Black", "DJI Osmo Pocket 2", "Atomos Ninja V", "SmallHD Focus OLED",
            "Tiffen Variable ND Filter", "Manfrotto MVH502AH", "Teradek Bolt 4K LT", "Hollyland Mars 400S Pro", "ARRI SkyPanel S60-C",
            "Litepanels Astra 6X", "Aputure LS 300X", "Kino Flo Celeb 250 LED", "Dedolight DLED7 Turbo", "Westcott Flex Cine RGBW Mat",
            "Astera Titan Tube", "Aladdin Bi-Flex M7", "LiteMat Spectrum", "Rosco DMG Lumiere MIX", "Cineo HS2 Remote Phosphor",
            "Lupo Superpanel Full Color 60", "Quasar Science Q-LED", "Kino Flo FreeStyle 31", "BB&S Pipeline Reflect", "Fiilex Matrix II RGBW",
            "Hive Lighting Hornet 200-C", "Rotolight Titan X2", "Dracast LED1000 Pro Bi-Color", "Godox SL150W II", "Aputure Amaran HR 672",
            "Astra 6X Bi-Color", "Rayzr MC 200", "Bowens XMS 750", "Falcon Eyes F7 RGB", "Angenieux Optimo Ultra 12x", "Canon CN-E 30-300mm",
            "Sony FE 200-600mm", "Panasonic Lumix S Pro 70-200mm", "Sigma 18-35mm f/1.8", "Tokina Cinema ATX 11-16mm", "Fujinon MKX 18-55mm"
        ];

        $cybersecurity = [
            "Metasploit", "Nmap", "Burp Suite", "Wireshark", "Kali Linux", "Acunetix", "OpenVAS", "Nessus", "ZAP Proxy",
            "SQLMap", "Hydra", "John the Ripper", "Aircrack-ng", "Nikto", "THC Hydra", "DirBuster", "OWASP ZAP", "Wfuzz",
            "Armitage", "BeEF", "Maltego", "Skipfish", "Sqlninja", "Havij", "Angry IP Scanner", "Netcat", "Cain & Abel",
            "Medusa", "THC-Hydra", "OpenSSL", "GNU Privacy Guard", "Snort", "Suricata", "OSSEC", "Zeek (formerly Bro)",
            "ModSecurity", "Security Onion", "Graylog", "MISP", "Ghidra", "IDA Pro", "Volatility", "Autopsy", "CyberChef",
            "Radare2", "Hashcat", "Responder", "Mimikatz", "PowerSploit", "Empire", "Veil-Framework",
            "SQL Injection (SQLi)", "Cross-Site Scripting (XSS)", "Local File Inclusion (LFI)", "Remote Code Execution (RCE)",
            "Command Injection", "XML External Entity (XXE) Injection", "Directory Traversal", "Server-Side Request Forgery (SSRF)",
            "Path Traversal", "Man-in-the-Middle (MitM) Attack", "Session Hijacking", "Brute Force Attack", "Buffer Overflow",
            "DNS Spoofing", "Phishing", "Social Engineering",
            "Heartbleed", "Shellshock", "EternalBlue (MS17-010)", "Spectre and Meltdown", "Dirty COW", "Rowhammer",
            "POODLE (SSLv3)", "Bash Shellshock", "Struts2 Remote Code Execution", "WordPress Plugin Vulnerabilities",
            "Magento Vulnerabilities", "Drupal Vulnerabilities", "Joomla Vulnerabilities", "Adobe Flash Player Vulnerabilities",
            "Apache Struts Vulnerabilities", "Java Deserialization", "DNS Cache Poisoning", "WordPress Brute Force",
            "WordPress XML-RPC Exploits", "FTP Bounce Attack"
        ];
        
        
        foreach($web_development as $items) {
            ProjectTechnologies::create([
                'category' => 'web development',
                'name' => $items
            ]);
        }

        foreach($data_analysis as $items) {
            ProjectTechnologies::create([
                'category' => 'data analysis',
                'name' => $items
            ]);
        }

        foreach($graphic_design as $items) {
            ProjectTechnologies::create([
                'category' => 'graphic design',
                'name' => $items
            ]);
        }

        foreach($machine_learning as $items) {
            ProjectTechnologies::create([
                'category' => 'machine learning',
                'name' => $items
            ]);
        }

        foreach($video_editing as $items) {
            ProjectTechnologies::create([
                'category' => 'video editing',
                'name' => $items
            ]);
        }

        foreach($content_creation as $items) {
            ProjectTechnologies::create([
                'category' => 'content creation',
                'name' => $items
            ]);
        }

        foreach($website_builder as $items) {
            ProjectTechnologies::create([
                'category' => 'website builder',
                'name' => $items
            ]);
        }

        foreach($game_development as $items) {
            ProjectTechnologies::create([
                'category' => 'game development',
                'name' => $items
            ]);
        }
        
        foreach($videography as $items) {
            ProjectTechnologies::create([
                'category' => 'videography',
                'name' => $items
            ]);
        }

        foreach($cybersecurity as $items) {
            ProjectTechnologies::create([
                'category' => 'cybersecurity',
                'name' => $items
            ]);
        }
        
        
        
    }
}
