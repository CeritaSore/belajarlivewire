@php
    $menus = [['name' => 'Home', 'link' => '#home'], ['name' => 'About', 'link' => '#about']];

    $aboutOverview = [
        'description' => [
            'Saya adalah seorang profesional IT dengan pengalaman lebih dari 5 tahun di bidang pengembangan web, DevOps, sistem administrasi, dan dukungan jaringan. Saya memiliki passion dalam membangun solusi teknologi yang efisien, scalable, dan secure.',
            'Dengan keahlian yang luas mulai dari frontend development hingga infrastruktur cloud, saya dapat membantu bisnis Anda dari tahap pengembangan hingga deployment dan maintenance.',
        ],
        'stats' => [
            ['value' => '5+', 'label' => 'Years Experience'],
            ['value' => '80+', 'label' => 'Projects Done'],
            ['value' => '40+', 'label' => 'Happy Clients'],
            ['value' => '100%', 'label' => 'Commitment'],
        ],
    ];

    $educations = [
        [
            'title' => 'Sarjana Teknik Informatika',
            'period' => '2018 - 2022',
            'institution' => 'Universitas Teknologi Indonesia',
            'detail' => 'IPK: 3.75/4.00',
            'borderColor' => 'border-blue-600',
        ],
        [
            'title' => 'AWS Certified Solutions Architect',
            'period' => '2023',
            'institution' => 'Amazon Web Services',
            'borderColor' => 'border-green-600',
            'dateClass' => 'text-green-600',
        ],
        [
            'title' => 'Certified Kubernetes Administrator (CKA)',
            'period' => '2024',
            'institution' => 'Cloud Native Computing Foundation',
            'borderColor' => 'border-purple-600',
            'dateClass' => 'text-purple-600',
        ],
    ];

    $experiences = [
        [
            'position' => 'Senior DevOps Engineer',
            'period' => '2023 - Present',
            'company' => 'PT Teknologi Digital Indonesia',
            'responsibilities' => [
                'Memimpin migrasi infrastruktur ke cloud (AWS)',
                'Mengimplementasikan CI/CD pipeline untuk 20+ microservices',
                'Managing Kubernetes cluster production dengan 99.9% uptime',
            ],
            'borderColor' => 'border-blue-600',
        ],
        [
            'position' => 'Full Stack Developer',
            'period' => '2021 - 2023',
            'company' => 'Startup Teknologi Jakarta',
            'responsibilities' => [
                'Mengembangkan aplikasi web menggunakan React dan Node.js',
                'Membangun RESTful API untuk mobile dan web applications',
                'Optimasi performa aplikasi dan database queries',
            ],
            'borderColor' => 'border-green-600',
            'dateClass' => 'text-green-600',
        ],
        [
            'position' => 'System Administrator',
            'period' => '2019 - 2021',
            'company' => 'Perusahaan IT Services',
            'responsibilities' => [
                'Managing 50+ Linux servers dan network infrastructure',
                'Implementasi monitoring system dengan Zabbix dan Grafana',
                'Technical support untuk client enterprise',
            ],
            'borderColor' => 'border-purple-600',
            'dateClass' => 'text-purple-600',
        ],
    ];

    $projects = [
        [
            'title' => 'E-Commerce Platform',
            'year' => '2025',
            'description' => 'Platform e-commerce lengkap dengan fitur shopping cart, payment gateway integration, inventory management, dan admin dashboard untuk manajemen produk dan order.',
            'technologies' => ['React', 'Node.js', 'Express', 'MongoDB', 'Redis', 'Stripe API'],
            'features' => ['Full-stack Development', 'Payment Integration'],
            'gradient' => 'from-blue-500 to-indigo-600',
            'icon' => 'shopping-cart',
        ],
        [
            'title' => 'CI/CD Pipeline Implementation',
            'year' => '2025',
            'description' => 'Implementasi continuous integration dan deployment pipeline untuk microservices architecture dengan automated testing, security scanning, dan zero-downtime deployment.',
            'technologies' => ['GitLab CI', 'Docker', 'Kubernetes', 'Helm', 'SonarQube', 'AWS EKS'],
            'features' => ['Automated Testing', '80% Faster Deployment'],
            'gradient' => 'from-green-500 to-teal-600',
            'icon' => 'pipeline',
        ],
        [
            'title' => 'Enterprise Server Infrastructure',
            'year' => '2024',
            'description' => 'Setup dan management infrastruktur server untuk enterprise dengan 50+ servers, termasuk security hardening, monitoring, backup automation, dan disaster recovery planning.',
            'technologies' => ['Linux', 'Ansible', 'Zabbix', 'Grafana', 'Prometheus', 'Bash'],
            'features' => ['99.9% Uptime', 'Security Hardened'],
            'gradient' => 'from-purple-500 to-purple-700',
            'icon' => 'server',
        ],
        [
            'title' => 'Multi-Site VPN Network',
            'year' => '2024',
            'description' => 'Implementasi site-to-site VPN untuk menghubungkan 10 branch office dengan secure tunnel, termasuk network segmentation, firewall rules, dan centralized network monitoring.',
            'technologies' => ['MikroTik', 'WireGuard', 'pfSense', 'VLAN', 'OSPF', 'Nagios'],
            'features' => ['Secure Encryption', 'Centralized Management'],
            'gradient' => 'from-orange-500 to-red-600',
            'icon' => 'vpn',
        ],
        [
            'title' => 'SaaS Analytics Dashboard',
            'year' => '2024',
            'description' => 'Dashboard analitik real-time untuk monitoring business metrics dengan interactive charts, custom reports, dan automated email reporting untuk stakeholder.',
            'technologies' => ['Next.js', 'TypeScript', 'PostgreSQL', 'Chart.js', 'Tailwind CSS', 'Vercel'],
            'features' => ['Real-time Data', 'Custom Reports'],
            'gradient' => 'from-cyan-500 to-blue-600',
            'icon' => 'analytics',
        ],
        [
            'title' => 'Cloud Migration Project',
            'year' => '2023',
            'description' => 'Migrasi infrastruktur on-premise ke AWS cloud dengan strategi lift-and-shift dan refactoring, termasuk setup VPC, EC2, RDS, S3, dan CloudFront untuk optimal performance dan cost efficiency.',
            'technologies' => ['AWS', 'Terraform', 'Docker', 'CloudFormation', 'Route53', 'CloudWatch'],
            'features' => ['60% Cost Reduction', 'Zero Downtime'],
            'gradient' => 'from-indigo-500 to-indigo-700',
            'icon' => 'cloud',
        ],
    ];

    $contactInfo = [
        ['icon' => 'email', 'title' => 'Email', 'content' => 'fajar.septianto@email.com'],
        ['icon' => 'phone', 'title' => 'Phone', 'content' => '+62 812 3456 7890'],
        ['icon' => 'location', 'title' => 'Location', 'content' => 'Jakarta, Indonesia'],
    ];

    $socialLinks = [
        ['platform' => 'twitter', 'url' => '#'],
        ['platform' => 'linkedin', 'url' => '#'],
        ['platform' => 'github', 'url' => '#'],
        ['platform' => 'dribbble', 'url' => '#'],
    ];
@endphp
<div>
    <x-frontend.navbar :menus="$menus" />
    <x-frontend.hero name='' title='' description='' image='' />

    <section id="about" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <x-frontend.about-section-header title="About Me" />
            <x-frontend.about-overview :description="$aboutOverview['description']" :stats="$aboutOverview['stats']" />
            <x-frontend.about-education :items="$educations" />
            <x-frontend.about-experience :items="$experiences" />
        </div>
    </section>
    <section id="projects" class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4">
            <x-frontend.projects-section-header 
                title="Projects" 
                description="Berikut adalah beberapa project yang telah saya kerjakan dengan berbagai teknologi dan tools." 
            />

            <div class="space-y-12">
                @foreach($projects as $project)
                    <x-frontend.project-card 
                        :title="$project['title']"
                        :year="$project['year']"
                        :description="$project['description']"
                        :technologies="$project['technologies']"
                        :features="$project['features']"
                        :gradient="$project['gradient']"
                        :icon="$project['icon']"
                    />
                @endforeach
            </div>
        </div>
    </section>
    <section id="contact" class="py-20 bg-white">
      <div class="max-w-6xl mx-auto px-4">
        <x-frontend.contact-section-header 
            title="Contact Me" 
            description="Tertarik untuk bekerja sama atau punya pertanyaan? Jangan ragu untuk menghubungi saya." 
        />

        <div class="max-w-4xl mx-auto">
          <div class="grid md:grid-cols-2 gap-12">
            <!-- Contact Info -->
            <div>
              <h3 class="text-xl font-semibold text-gray-800 mb-6">Get In Touch</h3>
              <div class="space-y-6">
                @foreach($contactInfo as $info)
                    <x-frontend.contact-info-item 
                        :icon="$info['icon']"
                        :title="$info['title']"
                        :content="$info['content']"
                    />
                @endforeach
              </div>

              <!-- Social Links -->
              <div class="mt-8">
                <h4 class="font-medium text-gray-900 mb-4">Follow Me</h4>
                <div class="flex gap-4">
                    @foreach($socialLinks as $social)
                        <x-frontend.social-link 
                            :platform="$social['platform']"
                            :url="$social['url']"
                        />
                    @endforeach
                </div>
              </div>
            </div>

            <!-- Contact Form -->
            <div>
              <x-frontend.contact-form action="/contact" method="POST" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <x-frontend.footer />
</div>
