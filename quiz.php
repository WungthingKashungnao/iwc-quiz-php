<?php

$questions = [
    [
        'question' => 'Q1:Which among the following traditional systems is used in Meghalaya for water conservation and distribution?',
        'options' => ['Kundis', 'Zabo', 'Ahar-Pyne', 'Bamboo Drip Irrigation'],
        'correct' => 'Bamboo Drip Irrigation'
    ],
    [
        'question' => 'Q2:What is the primary challenge for water conservation in Meghalaya, despite high rainfall?',
        'options' => ['Deforestation', 'Urbanization', 'Soil erosion', 'All of the above'],
        'correct' => 'All of the above'
    ],
    [
        'question' => "Q3:How does Meghalaya's topography affect water conservation efforts?",
        'options' => ['Causes rapid runoff and less groundwater recharge', 'Helps in easy storage of water', 'No significant effect', 'Creates natural reservoirs'],
        'correct' => 'Causes rapid runoff and less groundwater recharge'
    ],
    [
        'question' => 'Q4:Which laundry practice is more water-efficient from among the following?',
        'options' => ['Using a top-loading washing machine', 'Using a front-loading washing machine', 'Washing in warm water', 'Using the maximum water level setting for every load'],
        'correct' => 'Using a front-loading washing machine'
    ],
    [
        'question' => "Q5:What is the name of the first hydroelectric project in Northeast India, which marked a significant step in the region's energy development?",
        'options' => ['Kopili Hydroelectric Project', 'Khandong Hydroelectric Project', 'Umiam Hydroelectric Project', 'Ranganadi Hydroelectric Project'],
        'correct' => 'Umiam Hydroelectric Project'
    ]
];

echo json_encode($questions);

?>
