<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Package;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. LGCC Package 499 [cite: 639, 736]
        Package::create([
            'name' => 'LGCC Basic',
            'price' => 499,
            'validity' => '6 Month', // [cite: 642, 752]
            'features' => json_encode([
                'Career Counseling & Mapping', // [cite: 640, 641, 737, 738]
                'Job Placement Support', // [cite: 643, 739]
                'Job-Oriented Courses', // [cite: 644, 740]
                'Skill Development Program', // [cite: 645, 741]
                'Resume Building & CV Writing', // [cite: 646, 742]
                'LinkedIn Profile Optimization', // [cite: 647, 743]
                'Interview Preparation & Mock Interviews', // [cite: 648, 649, 744, 745]
                'Online Earnings Support', // [cite: 650, 746]
                'Scholarship Programs', // [cite: 651, 747]
                'Education Loan & Distance Learning', // [cite: 652, 653, 748, 749]
                'Academic Support & Coaching Classes', // [cite: 654, 655, 750, 751]
            ])
        ]);

        // 2. LGCC Package 999 [cite: 656, 753]
        Package::create([
            'name' => 'LGCC Standard',
            'price' => 999,
            'validity' => 'Complete Education', // [cite: 657, 775]
            'features' => json_encode([
                'All Basic Features included',
                '2 Free Short-Term Courses', // [cite: 661, 757]
                'Work-From-Home Jobs', // [cite: 669, 765]
                'Government & Competitive Exam Prep', // [cite: 670, 671, 766, 767]
                'Career Re-Start Programs', // [cite: 672, 768]
                'Digital Skills & AI-Based Program', // [cite: 673, 769]
                'Study Abroad & Global Career Support', // [cite: 674, 770]
                'Astrology & Numerology Support', // [cite: 675, 771]
                'College Ambassador Program', // [cite: 774, 801]
            ])
        ]);

        // 3. LGCC Package 1499 [cite: 680, 776]
        Package::create([
            'name' => 'LGCC Premium',
            'price' => 1499,
            'validity' => 'Life-Time', // [cite: 681, 802]
            'features' => json_encode([
                'All Standard Features included',
                '4 Free Short-Term Courses', // [cite: 685, 780]
                'Entrepreneurship & Startup Support', // [cite: 694, 793]
                'Project Development Support', // [cite: 694, 794]
                'Customized Service Programs', // [cite: 695, 795]
                'Govt Schemes & Skill India Support', // [cite: 685, 796]
                'Campus to Corporate Transition Programs', // [cite: 683, 799]
                'Women, Youth & Rural Skill Development', // [cite: 696, 798]
            ])
        ]);
    }
}