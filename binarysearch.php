<!DOCTYPE html>
<html lang="en">
<head>
    <title>Binary Search Form</title>
    <script>
        function binarySearch(arr, target) {
            let left = 0;
            let right = arr.length - 1;

            while (left <= right) {
                let mid = Math.floor((left + right) / 2);

                if (arr[mid] == target) {
                    return mid;
                } else if (arr[mid] < target) {
                    left = mid + 1;
                } else {
                    right = mid - 1;
                }
            }
            return -1;
        }

        function searchElement() {
            let arrInput = document.getElementById("array").value;
            let target = parseInt(document.getElementById("target").value);

            // Convert the comma-separated string into an array of numbers
            let arr = arrInput.split(',').map(Number);
            
            // Sort the array before performing binary search
            arr.sort((a, b) => a - b);

            let result = binarySearch(arr, target);

            if (result != -1) {
                document.getElementById("result").innerText = "Element found at index: " + result;
            } else {
                document.getElementById("result").innerText = "Element not found in the array.";
            }
            return false; // Prevent form submission
        }
    </script>
</head>
<body>
    <h2>Binary Search Implementation</h2>
    <form onsubmit="return searchElement()">
        <label for="array">Enter sorted array (comma separated):</label>
        <input type="text" id="array" name="array" required placeholder="e.g., 1,2,3,4,5">
        <br><br>
        <label for="target">Enter target element:</label>
        <input type="number" id="target" name="target" required>
        <br><br>
        <input type="submit" value="Search">
    </form>
    <p id="result"></p>
</body>
</html>
