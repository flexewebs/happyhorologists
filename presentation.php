<?php
$pagetitle = "Luxury Watch Media Hub";
$pageclass = "page-home";
$pagedescription = "Join the Happy Horologists community for exclusive watch photography, videos, and discussions.";

include("com/functions.php");
include("com/config.php");
include("com/open.php");
?>

<style>
        body {
            background-color: #1a1a1a;
            color: #ffffff;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        }

        .systems-section {
            padding: 3rem 1.5rem;
            background-color: #1a1a1a;
        }

        .systems-header {
            background-color: #1a1a1a;
            border: 1px solid #444;
            border-radius: 8px;
            padding: 1.5rem 2rem;
            margin-bottom: 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .systems-header h1 {
            font-size: 2.5rem;
            font-weight: 300;
            margin: 0;
            color: #ffffff;
        }

        .systems-header .investment {
            font-size: 1.5rem;
            font-weight: 300;
            color: #ffffff;
        }

        .equipment-card {
            background-color: #1a1a1a;
            border: 1px solid #444;
            border-radius: 8px;
            padding: 2.5rem 2rem;
            min-height: 280px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            transition: border-color 0.3s ease;
            height: 100%;
        }

        .equipment-card:hover {
            border-color: #666;
        }

        .equipment-card h3 {
            font-size: 2.5rem;
            font-weight: 300;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .equipment-card h3.pink {
            color: #ff1a75;
        }

        .equipment-card h3.blue {
            color: #6ba3ff;
        }

        .equipment-card p {
            font-size: 1.1rem;
            font-weight: 300;
            color: #e0e0e0;
            line-height: 1.6;
        }

        @media screen and (max-width: 768px) {
            .systems-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }

            .systems-header h1 {
                font-size: 2rem;
            }

            .systems-header .investment {
                font-size: 1.2rem;
            }

            .equipment-card h3 {
                font-size: 2rem;
            }

            .equipment-card p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <section class="systems-section">
        <div class="container is-fluid">
            <!-- Header -->
            <div class="systems-header">
                <h1>Systems</h1>
                <div class="investment">£7K+ invested into equipment so far</div>
            </div>

            <!-- Top Row - 4 Cards -->
            <div class="columns is-variable is-4 mb-4">
                <div class="column is-one-quarter-desktop is-half-tablet">
                    <div class="equipment-card">
                        <h3 class="pink">
                            Sony Alpha 7 II
                        </h3>
                        <p>
                            mirrorless professional camera - 24MP resolution
                        </p>
                    </div>
                </div>

                <div class="column is-one-quarter-desktop is-half-tablet">
                    <div class="equipment-card">
                        <h3 class="pink">
                            Sony FE 90mm F2.8
                        </h3>
                        <p>
                            best in class macro lens for ultra high details
                        </p>
                    </div>
                </div>

                <div class="column is-one-quarter-desktop is-half-tablet">
                    <div class="equipment-card">
                        <h3 class="pink">
                            Mac Studio M4 Max
                        </h3>
                        <p>
                            36GB RAM, 5TB SSD Apple Studio Display
                        </p>
                    </div>
                </div>

                <div class="column is-one-quarter-desktop is-half-tablet">
                    <div class="equipment-card">
                        <h3 class="blue">
                            DaVinci Resolve
                        </h3>
                        <p>
                            professional 4K+ video editing software
                        </p>
                    </div>
                </div>
            </div>

            <!-- Bottom Row - 3 Cards (1 small, 1 wide, 1 small) -->
            <div class="columns is-variable is-4">
                <div class="column is-one-quarter-desktop is-half-tablet">
                    <div class="equipment-card">
                        <h3 class="blue">
                            DJI Mic 2 2 sets
                        </h3>
                        <p>
                            for best in class audio recording for any situation
                        </p>
                    </div>
                </div>

                <div class="column is-half-desktop is-full-tablet">
                    <div class="equipment-card">
                        <h3 class="blue">
                            Insta360 Ace Pro 2 (8K), Lumix G80, Lumix GX-8
                        </h3>
                        <p>
                            supporting cameras for b-rolls, events footage, atmosphere shots and recording on the go
                        </p>
                    </div>
                </div>

                <div class="column is-one-quarter-desktop is-half-tablet">
                    <div class="equipment-card">
                        <h3 class="blue">
                            Various lighting kits
                        </h3>
                        <p>
                            light boxes, mobile lights, background panels
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include("com/close.php"); ?>