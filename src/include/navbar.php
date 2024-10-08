<?php 
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
include("config/database.php");
include("include/login.php");
?>
<nav
      class="flex h-12 flex-row z-50 fixed top-0 w-full items-center justify-between border-b-[1px] bg-blue-500 border-b-zinc-800 box-shadow-md shadow-zinc-600"
    >
      <div>
        <a
          class="block px-4 font-heebo text-lg font-bold leading-10 text-stone-50"
          href="/"
          >Kacsen</a
        >
      </div>
      <ul
        class="flex flex-row gap-4 px-6 font-heebo text-base font-semibold tracking-wide text-stone-50"
      >
        <li
          class="rounded-md px-2 duration-200 ease-in-out hover:bg-gray-600/50"
        >
          <a href="/" class="block leading-10" title="Home">Home</a>
        </li>
        <?php if (!isset($_SESSION["username"])):?>
        <li
          class="rounded-md px-2 duration-200 ease-in-out hover:bg-gray-600/50"
        >
          <button onclick="openModal('signIn');" class="block leading-10" title="Profile">Sign In</button>
        </li>
        <?php else: ?>
          <li
          class="rounded-md px-2 duration-200 ease-in-out hover:bg-gray-600/50"
        >
          <a href="<?php echo $_SESSION["username"]?>" id="profile" class="block leading-10" title="Profile"><?php echo $_SESSION["username"]?></a>
        </li>
        <?php endif; ?>
      </ul>
    </nav>