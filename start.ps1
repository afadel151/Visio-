
# Navigate to the project directory
$projectPath = "C:\Users\FADEL\Documents\GitHub\Visio-\planification"
Set-Location -Path $projectPath

# Start 'php artisan serve'
Start-Job -ScriptBlock {
    Set-Location -Path $using:projectPath
    php artisan serve
}

# Start 'npm run dev'
Start-Job -ScriptBlock {
    Set-Location -Path $using:projectPath
    npm run dev
}

# Give the servers a moment to start
Start-Sleep -Seconds 10

# Open Chrome and navigate to the project URL
$chromePath = "C:\Program Files\Google\Chrome\Application\chrome.exe"
$url = "http://127.0.0.1"
Start-Process -FilePath $chromePath -ArgumentList $url

