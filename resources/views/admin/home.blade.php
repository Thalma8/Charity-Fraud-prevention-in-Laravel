
<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
  </head>
  <body>
    <p> Welcome to the admin dashboard! 
      This is your one-stop-shop for managing and
       monitoring your website. From here, you'll have 
       access to all the tools you need to keep your website
        running smoothly. You'll be able to view and edit your 
        website's content, track user engagement and activity, and more. 
        Take some time to explore the different sections and get familiar with the
         various features available to you. If you have any questions or need help getting 
         started, please don't hesitate to reach out to our support team. We're here to help you make
          the most of your website.</p>
@include('admin.sidebar')
    @include('admin.navbar')
  @include('admin.body')
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
  @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>