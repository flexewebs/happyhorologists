<?php
// Core Function Library
session_start();

// 1. General Utilities
function sanitize($input) {
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

function redirect($url) {
    if (!headers_sent()) {
        header("Location: $url");
        exit;
    }
    echo "<script>window.location.href='$url';</script>";
    exit;
}

function formatNumber($num) {
    if ($num > 1000000) return round($num/1000000, 1) . 'M';
    if ($num > 1000) return round($num/1000, 1) . 'K';
    return $num;
}

// 2. Content Functions (Mock Data for now)
function getFeaturedVideos() {
    return [
        [
            'title' => 'Rolex Submariner: The Icon',
            'views' => 12500,
            'date' => '2 days ago',
            'thumb' => 'https://placehold.co/600x400/111/fff?text=Rolex'
        ],
        [
            'title' => 'Why I Sold My Patek',
            'views' => 45000,
            'date' => '1 week ago',
            'thumb' => 'https://placehold.co/600x400/111/fff?text=Patek'
        ],
        [
            'title' => 'Omega Speedmaster History',
            'views' => 8200,
            'date' => '2 weeks ago',
            'thumb' => 'https://placehold.co/600x400/111/fff?text=Omega'
        ]
    ];
}

function getGrowthStats() {
    return [
        'subscribers' => 15400,
        'views' => 1250000,
        'community' => 850
    ];
}
?>