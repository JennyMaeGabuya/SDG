
    var buttonIframes = [
        { buttonId: "sdg1", iframeId: "iframe1", iframeSrc: "sdg/sdg1.php" },
        { buttonId: "sdg2", iframeId: "iframe2", iframeSrc: "sdg/sdg2.php" },
        { buttonId: "sdg3", iframeId: "iframe3", iframeSrc: "sdg/sdg3.php" },
        { buttonId: "sdg4", iframeId: "iframe4", iframeSrc: "sdg/sdg4.php" },
        { buttonId: "sdg5", iframeId: "iframe5", iframeSrc: "sdg/sdg5.php" },
        { buttonId: "sdg6", iframeId: "iframe6", iframeSrc: "sdg/sdg6.php" },
        { buttonId: "sdg7", iframeId: "iframe7", iframeSrc: "sdg/sdg7.php" },
        { buttonId: "sdg8", iframeId: "iframe8", iframeSrc: "sdg/sdg8.php" },
        { buttonId: "sdg9", iframeId: "iframe9", iframeSrc: "sdg/sdg9.php" },
        { buttonId: "sdg10", iframeId: "iframe10", iframeSrc: "sdg/sdg10.php" },
        { buttonId: "sdg11", iframeId: "iframe11", iframeSrc: "sdg/sdg11.php" },
        { buttonId: "sdg12", iframeId: "iframe12", iframeSrc: "sdg/sdg12.php" },
        { buttonId: "sdg13", iframeId: "iframe13", iframeSrc: "sdg/sdg13.php" },
        { buttonId: "sdg14", iframeId: "iframe14", iframeSrc: "sdg/sdg14.php" },
        { buttonId: "sdg15", iframeId: "iframe15", iframeSrc: "sdg/sdg15.php" },
        { buttonId: "sdg16", iframeId: "iframe16", iframeSrc: "sdg/sdg16.php" },
        { buttonId: "sdg17", iframeId: "iframe17", iframeSrc: "sdg/sdg17.php" }
    ];

    buttonIframes.forEach(function(item) {
        var button = document.getElementById(item.buttonId);
        var iframe = document.getElementById(item.iframeId);
    
        var isIframeVisible = false; 
    
        button.addEventListener("click", function() {
            if (isIframeVisible) {
                iframe.style.display = "none";
            } else {
   
                iframe.style.display = "block";
            }
    
            isIframeVisible = !isIframeVisible;
        });
    });
    
