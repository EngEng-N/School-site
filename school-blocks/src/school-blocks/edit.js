/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';
import { InspectorControls } from '@wordpress/block-editor';
import { PanelBody, SelectControl } from '@wordpress/components';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */


/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit(props) {
    const blockProps = useBlockProps();
    
    const [aosValue, setAosValue] = React.useState('fade-up');

    return (
        <>
            <InspectorControls>
                <PanelBody title={__('Animation Settings', 'fwd-blocks')}>
                    <SelectControl
                        label={__('Choose AOS Animation', 'fwd-blocks')}
                        value={aosValue}
                        options={[
                            { label: __('Fade Up', 'fwd-blocks'), value: 'fade-up' },
                            { label: __('Fade Down', 'fwd-blocks'), value: 'fade-down' },
                            { label: __('Fade Left', 'fwd-blocks'), value: 'fade-left' },
                            { label: __('Fade Right', 'fwd-blocks'), value: 'fade-right' }
                        ]}
                        onChange={(newValue) => setAosValue(newValue)}
                    />
                </PanelBody>
            </InspectorControls>

            <div {...blockProps} data-aos={aosValue}>
                <InnerBlocks />
            </div>
        </>
    );
}
