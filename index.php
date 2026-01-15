<?php
$pagetitle = "Luxury Watch Media Hub";
$pageclass = "page-home";
$pagedescription = "Join the Happy Horologists community for exclusive watch photography, videos, and discussions.";

include("static/functions.php");
include("static/config.php");
include("static/open.php");

$stats = getGrowthStats();
$videos = getFeaturedVideos();
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1>The Art of Time</h1>
        <p class="lead">Discover the world's finest timepieces through cinematic videography and macro photography.</p>
        <div class="cta-group">
            <a href="<?php echo YOUTUBE_CHANNEL; ?>" class="btn">Watch on YouTube</a>
            <a href="photography.php" class="btn outline">View Gallery</a>
        </div>
    </div>
</section>

<!-- Growth Stats -->
<section class="stats-section">
    <div class="container">
        <div class="stats-row">
            <div class="stat-item text-center">
                <h4><?php echo formatNumber($stats['subscribers']); ?></h4>
                <span>Subscribers</span>
            </div>
            <div class="stat-item text-center">
                <h4><?php echo formatNumber($stats['views']); ?></h4>
                <span>Total Views</span>
            </div>
            <div class="stat-item text-center">
                <h4><?php echo formatNumber($stats['community']); ?></h4>
                <span>Community Members</span>
            </div>
        </div>
    </div>
</section>

<!-- Featured Content -->
<section class="featured mb-large">
    <div class="container">
        <div class="section-header text-center mb-large">
            <h2>Latest Productions</h2>
            <p>Cinematic reviews and storytelling.</p>
        </div>
        
        <div class="grid">
            <?php foreach($videos as $video): ?>
            <div class="card">
                <img src="<?php echo $video['thumb']; ?>" alt="<?php echo $video['title']; ?>" class="card-image">
                <div class="card-meta"><?php echo $video['date']; ?> • <?php echo formatNumber($video['views']); ?> views</div>
                <h3><?php echo $video['title']; ?></h3>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include("static/close.php"); ?>