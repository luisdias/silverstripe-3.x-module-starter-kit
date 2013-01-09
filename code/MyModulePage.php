<?php
/* Silverstripe 3.x Module Starter Kit */
class MyModulePage extends Page {
    
    static $allowed_children = array(); // Indicates what kind of children this page type can have.
    
    static $belongs_many_many = array();
    
    static $cache_permissions = array(); // Cache for canView/Edit/Publish/Delete permissions
    
    static $can_be_root = false;
    
    static $can_create = true;
    
    static $casting = array(
      "Breadcrumbs" => "HTMLText",
      "LastEdited" => "SS_Datetime",
      "Created" => "SS_Datetime",
      'Link' => 'Text',
      'RelativeLink' => 'Text',
      'AbsoluteLink' => 'Text',
    );
    
    /* 
     * Available Types
     * Boolean: A boolean field.
     * Currency: A number with 2 decimal points of precision, designed to store currency values.
     * Date: A date field
     * Decimal: A decimal number.
     * Enum: An enumeration of a set of strings
     * HTMLText: A variable-length string of up to 2 megabytes, designed to store HTML
     * HTMLVarchar: A variable-length string of up to 255 characters, designed to store HTML
     * Int: An integer field.
     * Percentage: A decimal number between 0 and 1 that represents a percentage.
     * SS_Datetime: A date / time field
     * Text: A variable-length string of up to 2 megabytes, designed to store raw text
     * Time: A time field
     * Varchar: A variable-length string of up to 255 characters, designed to store raw text
     */        
    static $db = array();
    
    static $defaults = array();
    
    static $default_child = "Page"; // The default child class for this page
    
    static $default_parent = null; // The default parent class for this page
    
    static $default_sort = "\"Sort\"";
    
    static $description = "Generic content page"; // Description of the class functionality
    
    static $enforce_strict_hierarchy = true;
    
    static $enforce_strict_hierarchy = true;
    
    static $extensions = array();
    
    static $field_labels = array();
    
    static $hide_ancestor = null; // If you extend a class
    
    static $icon = null; // Icon to use in the CMS page tree
    
    static $indexes = array();
    
    static $many_many = array();
    
    static $many_many_extraFields = array(); 
    
    static $need_permission = null; // List of permission codes a user can have to allow create
    
    static $page_states	= array('readonly');
    
    static $searchable_fields = array("Title", "Content");
    
    static $versioning = array("Stage","Live");

    /*
     * Form Field Types
     * Basic
     * CheckboxField: Single checkbox field.
     * DropdownField: A <select> tag. Can optionally save into has-one relationships.
     * ReadonlyField: Read-only field to display a non-editable value with a label.
     * TextareaField: Multi-line text field.
     * TextField: Multi-line text field.
     * PasswordField: Masked input field
     * 
     * Actions
     * FormAction: Button element for forms, both for <input type="submit"> and <button>.
     * ResetFormAction: Action that clears all fields on a form.
     * 
     * Formatted Input
     * AjaxUniqueTextField: Text field that automatically checks that the value 
     *      entered is unique for the given set of fields in a given set of tables
     * ConfirmedPasswordField: Two masked input fields, checks for matching passwords.
     * CountryDropdownField: A simple extension to dropdown field, pre-configured to list countries.
     * CreditCardField: Allows input of credit card numbers via four separate form 
     *      fields, including generic validation of its numeric values.
     * CurrencyField: Text field, validating its input as a currency. Limited to 
     *      US-centric formats, including a hardcoded currency symbol and decimal 
     *      separators. See MoneyField for a more flexible implementation.
     * DateField: Represents a date in a single input field, or separated into 
     *      day, month, and year. Can optionally use a calendar popup.
     * DatetimeField: Combined date- and time field
     * EmailField: Text input field with validation for correct email format according to RFC 2822.
     * GroupedDropdownField: Grouped dropdown, using <optgroup> tags.
     * HTMLEditorField.
     * MoneyField: A form field that can save into a Money database field.
     * NumericField: Text input field with validation for numeric values.
     * OptionsetField: Set of radio buttons designed to emulate a dropdown.
     * PhoneNumberField: Field for displaying phone numbers. It separates the 
     *      number, the area code and optionally the country code and extension.
     * SelectionGroup: SelectionGroup represents a number of fields which are 
     *      selectable by a radio button that appears at the beginning of each item.
     * TimeField: Input field with time-specific, localized validation.
     * 
     * Structure
     * CompositeField: Base class for all fields that contain other fields. 
     *      Uses <div> in template, but doesn't necessarily have any visible styling.
     * FieldGroup attached in CMS-context.
     * FieldList: Basic container for sequential fields, or nested fields through CompositeField.
     * TabSet: Collection of fields which is rendered as separate tabs. Can be nested.
     * Tab: A single tab inside a TabSet
     * ToggleCompositeField: Allows visibility of a group of fields to be toggled.
     * ToggleField: ReadonlyField with added toggle-capabilities - will preview 
     *      the first sentence of the contained text-value, and show the full content by a 
     *      javascript-switch.
     * 
     * Files
     * FileField: Simple file upload dialog.
     * UploadField: File uploads through HTML5 features, including upload progress, 
     *      preview and relationship management.
     * 
     * Relations
     * CheckboxSetField: Displays a set of checkboxes as a logical group.
     * TableField: In-place editing of tabular data.
     * TreeDropdownField: Dropdown-like field that allows you to select an item 
     *      from a hierarchical AJAX-expandable tree.
     * TreeMultiselectField: Represents many-many joins using a tree selector 
     *      shown in a dropdown-like element
     * GridField(framework/en/reference/grid-field)`: Displays a SS_List in a 
     *      tabular format. Versatile base class which can be configured to 
     *      allow editing, sorting, etc.
     * ListboxField: Multi-line listbox field, through <select multiple>.
     * 
     * Utility
     * DatalessField - Base class for fields which add some HTML to the form but 
     *      don't submit any data or save it to the database
     * HeaderField: Renders a simple HTML header element.
     * HiddenField
     * LabelField: Simple label tag. This can be used to add extra text in your forms.
     * LiteralField: Renders arbitrary HTML into a form.    
     */    
    function getCMSFields() {
        $fields = parent::getCMSFields();
        /*
        $dateField = new DateField('Date');
        $dateField->setConfig('showcalendar', true);
        $fields->addFieldToTab('Root.Main', $dateField, 'Content');
        $fields->addFieldToTab('Root.Main', new TextField('Author'), 'Content');
        $fields->addFieldToTab('Root.NewTab', new TextField('Title'));
         */
        return $fields;
    }    
    
}
class MyModule_Controller extends Page_Controller {
    public function init() {
        parent::init();
        Requirements::javascript("mymodule/javascript/script.js");
        Requirements::themedCSS('style');
    }    
}