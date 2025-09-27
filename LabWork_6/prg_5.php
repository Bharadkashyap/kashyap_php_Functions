<?php
$resume = [
    'name' => 'Jane Doe',
    'email' => 'jane.doe@example.com',
    'phone' => '123-456-7890',
    'education' => [
        'Bachelor of Science in Computer Science',
        'Master of Information Technology'
    ],
    'experience' => [
        [
            'company' => 'Tech Solutions Inc.',
            'role' => 'Software Developer',
            'years' => 3
        ],
        [
            'company' => 'Innovatech',
            'role' => 'Senior Developer',
            'years' => 2
        ]
    ]
];

echo "Name: " . $resume['name'] . PHP_EOL;
echo "Email: " . $resume['email'] . PHP_EOL;
echo "Phone: " . $resume['phone'] . PHP_EOL;
echo PHP_EOL . "Education:" . PHP_EOL;
foreach ($resume['education'] as $edu) {
    echo "- " . $edu . PHP_EOL;
}
echo PHP_EOL . "Work Experience:" . PHP_EOL;
foreach ($resume['experience'] as $job) {
    echo "- " . $job['role'] . " at " . $job['company'] . " (" . $job['years'] . " years)" . PHP_EOL;
}
?>
