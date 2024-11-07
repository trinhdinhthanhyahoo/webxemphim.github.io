<?php
function getMovies($category = null, $limit = 12) {
    global $conn;
    
    $sql = "SELECT * FROM movies";
    if ($category) {
        $sql .= " WHERE category = '" . $conn->real_escape_string($category) . "'";
    }
    $sql .= " ORDER BY created_at DESC LIMIT " . (int)$limit;
    
    $result = $conn->query($sql);
    $movies = [];
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $movies[] = $row;
        }
    }
    
    return $movies;
}

function getFeaturedMovie() {
    global $conn;
    $sql = "SELECT * FROM movies WHERE is_featured = 1 ORDER BY RAND() LIMIT 1";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    }
    return null;
}

function getUserWatchlist($user_id) {
    global $conn;
    $sql = "SELECT m.* FROM movies m 
            JOIN watchlist w ON m.id = w.movie_id 
            WHERE w.user_id = " . (int)$user_id;
    
    $result = $conn->query($sql);
    $movies = [];
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $movies[] = $row;
        }
    }
    
    return $movies;
} 