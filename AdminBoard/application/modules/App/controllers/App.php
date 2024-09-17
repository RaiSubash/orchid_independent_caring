<?php defined('BASEPATH') or exit('No direct script access allowed');

class App extends OAS_Controller
{
    public $data = array();

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->data['main_title'] = "Dashboard Page";
        $this->data['title_small'] = "";

        $this->data['inner_template'] = 'Dashboard/DashboardViewPage';
        $this->load->view('Common/common', $this->data);
    }

    function _example_output($output, $data)
    {
        $final_output['data'] = $data;
        $final_output['output'] = (array)$output;
        $this->load->view('Common/common', $final_output);
    }


    function slider()
    {
        $data['main_title'] = "Slider Setup";
        $data['title_small'] = "";
        $crud = new grocery_CRUD();

        $crud->set_table('slider');

        $crud->set_field_upload('featured_image', 'uploads/slider');

        $crud->columns(['title', 'status']);
        $crud->required_fields('title', 'short_description', 'featured_image', 'status');

        $output = $crud->render();
        $this->_example_output($output, $data);
    }

    function features()
    {

        $data['main_title'] = "Features Management";
        $data['title_small'] = "";
        $crud = new grocery_CRUD();

        $crud->set_table('features');

        $crud->set_field_upload('featured_image', 'uploads/features');
        $crud->columns(['title', 'is_active']);
        $crud->required_fields('title', 'short_description', 'featured_image', 'is_active');

        $output = $crud->render();
        $this->_example_output($output, $data);
    }

    function whyChooseUs()
    {

        $data['main_title'] = "Why Choose Us";
        $data['title_small'] = "";
        $crud = new grocery_CRUD();

        $crud->set_table('why_choose_us');

        $crud->set_field_upload('featured_image', 'uploads/whyChooseUs');
        $crud->columns(['title', 'is_active']);
        $crud->required_fields('title', 'short_description', 'featured_image', 'is_active');

        $output = $crud->render();
        $this->_example_output($output, $data);
    }

    function homePageDescription()
    {

        $data['main_title'] = "Home Page Description";
        $data['title_small'] = "";
        $crud = new grocery_CRUD();

        $crud->set_table('home_page_description');

        $crud->set_field_upload('featured_image', 'uploads/home');
        $crud->columns(['title', 'is_active']);
        $crud->required_fields('title', 'short_description', 'featured_image', 'is_active');

        $output = $crud->render();
        $this->_example_output($output, $data);
    }

    function banner()
    {
        $data['main_title'] = "Banner Management";
        $data['title_small'] = "";
        $crud = new grocery_CRUD();

        $crud->set_table('banner');

        $crud->set_field_upload('featured_image', 'uploads/banner');

        $crud->columns(['title', 'featured_image']);
        $crud->required_fields(
            'title',
            'featured_image',
            'is_active'
        );

        $output = $crud->render();
        $this->_example_output($output, $data);
    }

    function newsletter()
    {
        $data['main_title'] = "Newsletter Management";
        $data['title_small'] = "";
        $crud = new grocery_CRUD();

        $crud->set_table('newsletter');

        $crud->columns(['title', 'month', 'is_active']);
        $crud->required_fields(
            'title',
            'file',
            'month',
            'is_active'
        );
        $crud->set_field_upload('file', 'uploads/newsletters');

        $output = $crud->render();
        $this->_example_output($output, $data);
    }

    function notices()
    {
        $data['main_title'] = "Notice ";
        $data['title_small'] = "Setup";
        $crud = new grocery_CRUD();

        $crud->set_table('notices');

        // $crud->columns(['title','is_active']);
        $crud->columns(['title', 'is_active']);
        $crud->required_fields('title', 'file', 'created_date', 'is_active');
        $crud->set_field_upload('file', 'uploads/notices');

        $output = $crud->render();
        $this->_example_output($output, $data);
    }


    function aboutUs()
    {
        $data['main_title'] = "AboutUs Management";
        $data['title_small'] = "";
        $crud = new grocery_CRUD();

        $crud->set_table('about_us');

        $crud->set_field_upload('featured_image', 'uploads/about');

        $crud->columns(['title', 'is_active']);
        $crud->required_fields(
            'title',
            'description',
            'featured_image',
            'is_active'
        );

        $output = $crud->render();
        $this->_example_output($output, $data);
    }

    function managementTeam()
    {
        $data['main_title'] = "Management Team";
        $data['title_small'] = "";
        $crud = new grocery_CRUD();

        $crud->set_table('management_team');

        $crud->set_field_upload('featured_image', 'uploads/team');

        $crud->columns(['name', 'designation', 'is_active']);
        $crud->required_fields('name', 'description', 'designation', 'featured_image', 'is_active');

        $output = $crud->render();
        $this->_example_output($output, $data);
    }


    function ourVision()
    {
        $data['main_title'] = "Vision Management";
        $data['title_small'] = "";
        $crud = new grocery_CRUD();

        $crud->set_table('our_vision');

        $crud->set_field_upload('featured_image', 'uploads/vision');

        $crud->columns(['title', 'featured_image']);
        $crud->required_fields(
            'title',
            'description',
            'featured_image',
            'is_active'
        );

        $output = $crud->render();
        $this->_example_output($output, $data);
    }


    function ourTeam()
    {
        $data['main_title'] = "Team  Management";
        $data['title_small'] = "";
        $crud = new grocery_CRUD();

        $crud->set_table('our_team');

        $crud->set_field_upload('featured_image', 'uploads/team');

        $crud->columns(['name', 'featured_image']);
        $crud->required_fields(
            'name',
            'position',
            'featured_image',
            'description',
            'is_active'
        );

        $output = $crud->render();
        $this->_example_output($output, $data);
    }

    function galleryCategory()
    {
        $data['main_title'] = "Gallery Category";
        $data['title_small'] = "Setup";
        $crud = new grocery_CRUD();

        $crud->set_table('gallery_category');

        $crud->columns(['title', 'is_active']);
        $crud->required_fields('title', 'is_active');

        $output = $crud->render();
        $this->_example_output($output, $data);
    }


    function gallery()
    {
        $data['main_title'] = "Gallery Setup";
        $data['title_small'] = "";
        $crud = new grocery_CRUD();

        $crud->set_table('gallery');

        $crud->set_field_upload('featured_image', 'uploads/gallery');
        $crud->set_relation('category_id', 'gallery_category', 'title');

        $crud->columns(['featured_image', 'is_active']);
        $crud->required_fields('featured_image', 'is_active');

        $output = $crud->render();
        $this->_example_output($output, $data);
    }


    function testimonials()
    {

        $data['main_title'] = "Testimonial Management";
        $data['title_small'] = "";
        $crud = new grocery_CRUD();

        $crud->set_table('testimonials');

        $crud->columns(['name', 'status']);
        $crud->set_field_upload('featured_image', 'uploads/testimonial');
        $crud->required_fields('name', 'message', 'featured_image', 'status');

        $output = $crud->render();
        $this->_example_output($output, $data);
    }

    function faqs()
    {

        $data['main_title'] = "FAQs Setup";
        $data['title_small'] = "";
        $crud = new grocery_CRUD();

        $crud->set_table('faqs');

        $crud->columns(['question', 'is_active']);
        $crud->required_fields('question', 'is_active');

        $output = $crud->render();
        $this->_example_output($output, $data);
    }

    function serviceCategory()
    {

        $data['main_title'] = "Service Category";
        $data['title_small'] = "Management";
        $crud = new grocery_CRUD();

        $crud->set_table('service_category');

        $crud->columns(['title', 'is_active']);
        $crud->required_fields('title', 'is_active');

        $output = $crud->render();
        $this->_example_output($output, $data);
    }


    function services()
    {

        $data['main_title'] = "Service Management";
        $data['title_small'] = "";
        $crud = new grocery_CRUD();

        $crud->set_table('services');

        $crud->set_field_upload('featured_image', 'uploads/services');
        $crud->columns(['title', 'featured_image', 'status']);
        $crud->required_fields('title', 'description', 'featured_image', 'status', 'slug');

        $output = $crud->render();
        $this->_example_output($output, $data);
    }

    function service_gallery()
    {

        $data['main_title'] = "Service Gallery Management";
        $data['title_small'] = "";
        $crud = new grocery_CRUD();

        $crud->set_table('service_gallery');

        $crud->set_field_upload('featured_image', 'uploads/services');
        $crud->columns(['featured_image', 'is_active']);
        $crud->required_fields('featured_image', 'service_id', 'is_active');

        $crud->set_relation('service_id', 'services', 'title');

        $output = $crud->render();
        $this->_example_output($output, $data);
    }

    function blogs()
    {
        $data['main_title'] = "Blog Setup";
        $data['title_small'] = "";
        $crud = new grocery_CRUD();

        $crud->set_table('blogs');

        $crud->set_field_upload('featured_image', 'uploads/blog');

        $crud->columns(['title', 'status']);
        $crud->required_fields(
            'title',
            'featured_image',
            'description',
            'date',
            'slug',
        );

        $output = $crud->render();
        $this->_example_output($output, $data);
    }

    function events()
    {
        $data['main_title'] = "Events Setup";
        $data['title_small'] = "";
        $crud = new grocery_CRUD();

        $crud->set_table('events');


        $crud->columns(['title', 'is_active']);
        $crud->required_fields('title', 'description', 'featured_image', 'is_active');
        $crud->set_field_upload('featured_image', 'uploads/events');

        $output = $crud->render();
        $this->_example_output($output, $data);
    }

    function siteSetting()
    {
        $data['main_title'] = "Site Management";
        $data['title_small'] = "";

        $crud = new grocery_CRUD();

        $crud->set_table('site_setting');
        $crud->set_field_upload('site_logo', 'uploads/site');
        $crud->set_field_upload('favicon', 'uploads/site');

        $crud->unset_back_to_list();
        $crud->columns(['site_name', 'email_address']);

        $crud->required_fields('site_logo', 'fav_icon ', 'site_name', 'phone_number', 'email_address', 'address');

        $output = $crud->render();
        $this->_example_output($output, $data);
    }


    function welcomeSection()
    {
        $data['main_title'] = "Welcome Section Setup";
        $data['title_small'] = "";
        $crud = new grocery_CRUD();

        $crud->set_table('welcome_section');

        $crud->set_field_upload('featured_image', 'uploads/home');

        $crud->columns(['featured_image', 'is_active']);
        $crud->required_fields('title', 'description', 'featured_image', 'is_active');

        $output = $crud->render();
        $this->_example_output($output, $data);
    }

    function userManagement()
    {
        $data['main_title'] = "User";
        $data['title_small'] = "Management";
        $crud = new grocery_CRUD();

        $crud->set_table('user_auth');

        $crud->columns(['full_name', 'email', 'is_active']);
        $crud->required_fields('full_name', 'email', 'pass', 'is_active', 'is_locked_flag');
        $crud->callback_before_insert(array($this, 'encrypt_password_callback'));
        $crud->callback_before_update(array($this, 'encrypt_password_callback'));

        $crud->display_as('pass', 'Password');

        $output = $crud->render();
        $this->_example_output($output, $data);
    }

    function encrypt_password_callback($post_array)
    {
        $post_array['pass'] = md5($post_array['pass']);

        return $post_array;
    }


    function socialSites()
    {
        $data['main_title'] = "Social Sites";
        $data['title_small'] = "social sites management";

        $crud = new grocery_CRUD();
        $crud->set_table('social_sites');

        $crud->columns(['featured_link', 'is_active']);
        $crud->required_fields('featured_link', 'featured_image', 'is_active');
        $crud->set_field_upload('featured_image', 'uploads/site');
        $output = $crud->render();
        $this->_example_output($output, $data);
    }







    function upload()
    {
        $CKEditor = $_GET['CKEditor'];
        $funcNum = $_GET['CKEditorFuncNum'];
        $url_image = FCPATH . 'uploads/media/';

        $allowed_extension = array(
            "png",
            "jpg",
            "jpeg",
            "JPG",
            "JPEG"
        );

        $file_extension = pathinfo($_FILES["upload"]["name"], PATHINFO_EXTENSION);

        if (in_array(strtolower($file_extension), $allowed_extension)) {
            $filename = $_FILES["upload"]["name"];
            $file_basename = substr($filename, 0, strripos($filename, '.'));
            $file_ext = substr($filename, strripos($filename, '.'));
            $newfilename = $file_basename . time() . $file_ext;

            if (move_uploaded_file($_FILES['upload']['tmp_name'], $url_image . $newfilename)) {

                if (isset($_SERVER['HTTPS'])) {
                    $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
                } else {
                    $protocol = 'http';
                }

                $url = base_url('uploads/media/') . $newfilename;
                $data['url'] = $newfilename;

                $this->db->insert('media_gallery', $data);
                echo '<script>window.parent.CKEDITOR.tools.callFunction(' . $funcNum . ', "' . $url . '", "' . $message . '")</script>';
            }

            exit;
        }
    }
}
