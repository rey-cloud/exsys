<div class="fixed top-0 left-0 w-full h-full bg-black opacity-75 z-10" style="display: block;">
</div>
<div
  class="modal fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-[#d0d9e7] p-6 shadow-lg rounded-lg z-20"
  style="display: block;">
  <div class="flex justify-between">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Forgot PIN</h2>
    <form action="index.php" method="post">
      <button type="submit" name="close-forgot"
        class="cursor-pointer absolute top-5 right-5 text-md text-gray-500 p-2 rounded-lg hover:bg-gray-100 hover:">Cancel</button>
    </form>
  </div>
  <hr class="w-full m-auto border mb-3">
  <form action="query/forgot-validation.php" method="POST" class="sm:w-[200px] md:w-[300px] lg:w-[500px] mx-auto duration-300">
    <div class="lg:flex block duration-300 mb-3">
    <?php 
        require('query/fetch-user.php'); 
        $fQuestionNum = $row['s_question'];
        include("php_tabs/security-questions.php");
    ?>
      <label class="mr-2"><?php echo $securityQuestions[$fQuestionNum]; ?></label>
      <?php if (isset($_GET['forgot-error'])) { ?>
      <p class="text-red-500"><?php echo "(" . $_GET['forgot-error'] . ")" ?></p>
      <?php } ?>
    </div>
      <input
        class="w-full bg-white focus:bg-white py-2 px-3 rounded-md border-2 border-gray-300 transition-all duration-500 outline-none focus:border-[#003568] focus:text-[#004e94] mb-5"
        name="submit-forgot">
      <br>

      <div class="flex justify-center items-center">
        <button type="submit"
          class="hover:border-[#876128] border-2 py-2 px-10 shadow-md tracking-wider rounded-2xl hover:bg-[#febd5b] bg-[#5495C9] font-semibold text-white border-[#2e5679] hover:text-[#002951] transition duration-300 ease-in-out block dark:hidden">Submit
        </button>
        <button type="submit"
          class="border-[#876128] border-2 py-2 px-10 shadow-md tracking-wider rounded-2xl bg-[#febd5b] hover:bg-[#5495C9] font-semibold hover:text-white hover:border-[#2e5679] text-[#002951] transition duration-300 ease-in-out hidden dark:block">Submit
        </button>
  </form>
</div>
</form>
</div>