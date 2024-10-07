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

    function whyChooseUs()
    {

        $data['main_title'] = "Why Choose Us";
        $data['title_small'] = "";
        $crud = new grocery_CRUD();

        $crud->set_table('why_choose_us');

        $crud->set_field_upload('featured_image', 'uploads/whyChooseUs');
        $crud->columns(['title', 'status']);
        $crud->required_fields('title', 'description', 'featured_image', 'status');

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

    function aboutUs()
    {
        $data['main_title'] = "AboutUs Management";
        $data['title_small'] = "";
        $crud = new grocery_CRUD();

        $crud->set_table('about_us');

        $crud->set_field_upload('featured_image', 'uploads/about');

        $crud->columns(['title', 'status']);
        $crud->required_fields(
            'title',
            'description',
            'status'
        );

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




    function services()
    {

        $data['main_title'] = "Service Management";
        $data['title_small'] = "";
        $crud = new grocery_CRUD();

        $crud->set_table('services');

        $crud->set_field_upload('featured_image', 'uploads/services');
        $crud->set_field_upload('detail_page_image', 'uploads/services');
        $crud->columns(['title', 'featured_image', 'status']);
        $crud->required_fields('title', 'description', 'featured_image', 'status', 'slug');

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

    function gettingStarted()
    {
        $data['main_title'] = "Getting Started";
        $data['title_small'] = "Management";
        $crud = new grocery_CRUD();

        $crud->set_table('getting_started');

        $crud->set_field_upload('featured_image', 'uploads/gettingStarted');

        $crud->columns(['title', 'status']);
        $crud->required_fields(
            'title',
            'featured_image',
            'step',
            'status'
        );

        $output = $crud->render();
        $this->_example_output($output, $data);
    }


    function contactInbox()
    {
        $data['main_title'] = "Contact";
        $data['title_small'] = "Inbox";
        $crud = new grocery_CRUD();

        $crud->set_table('contact');

        $crud->columns(['name', 'email', 'contact_number']);
        $crud->unset_add();
        $crud->unset_clone();
        $crud->unset_edit();

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
