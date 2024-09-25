    <?php include 'partials/header.view.php'; ?>

    <main class="py-4">
        <div class="m-2 flex flex-col py-2 bg-gray-300">
            <h2 class="text-2xl underline">Add Book</h2>
            <form class="m-2" action="add-book" method="POST">
                <div class="px-4 justify-center">
                    <label for="title">Title</label><input class="text-sm px-2" type="text" placeholder="title">
                </div>
                <div class="px-4 justify-center">
                    <button class="bg-red-600 text-white" type="submit">Add</button>
                </div>
            </form>
        </div>
    </main>
    <?php include 'partials/footer.view.php';?>
</body>
</html>