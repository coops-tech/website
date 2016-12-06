<?php

class ouService extends ouPost {

    public function permalink($leaveName = false) {
        $parentUrl = get_bloginfo('url') . '/service/';
        return $parentUrl . $this->post_name . '/';
    }

    /**
     * @return string
     */
    public function name() {
        return $this->title();
    }

    /**
     * @param string $size
     * @param array $attrs
     * @return string
     */
    public function iconThumbnail($size = 'thumbnail', $attrs = array()) {
        return $this->featuredImage($size, $attrs);
    }

    /**
     * @param string $size
     * @param array $attrs
     * @return string
     */
    public function iconUrl($size = 'thumbnail', $attrs = array()) {
        if (!$this->iconThumbnail($size, $attrs)) {
            return 'http://placehold.it/300x200';
        }

        return $this->featuredImageUrl($size);
    }

    /**
     * @return ooWP_Query|ouCoOp[]
     */
     public function coOps() {
         return $this->connected(ouCoOp::postType(), false);
     }

}
