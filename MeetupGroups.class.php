<?php

/**
 * Client for the 'groups' grouping of the Meetup API
 *
 * @link http://www.meetup.com/meetup_api/docs
 */
class MeetupGroups extends MeetupApiRequest {


    /**
     * Returns all groups matching the given criteria
     *
     * Required parameters:
     * 'campaign_id' | 'domain' | 'group_id' | 'group_urlname' | 'member_id' | 'organizer_id' | 'sponsor_id' | 'topic' | 'country' | 'city' | 'state' | 'zip' | 'lat' | 'lon' | 'radius'
     *
     * @link http://www.meetup.com/meetup_api/docs/2/groups
     * @param Array $Parameters
     * @return Array
     */
    public function getGroups( $Parameters ) {
        $required_params = array( 'campaign_id', 'domain', 'group_id', 'group_urlname', 'member_id', 'organizer_id', 'sponsor_id', 'topic', 'country', 'city', 'state', 'zip', 'lat', 'lon', 'radius');
        $url = $this->buildUrl( MEETUP_ENDPOINT_GROUPS, $Parameters, $required_params );
        $response =  $this->get( $url )->getResponse();
        return $response['results'];
    }

    /**
     * Returns all comments associated with the given group
     *
     * Required parameters:
     * 'group_id' | 'group_urlname' | 'topic,groupnum'
     *
     * @link http://www.meetup.com/meetup_api/docs/comments
     * @param Array $Parameters
     * @return Array
     */
    public function getComments( $Parameters ) {
        $required_params = array( 'group_id', 'group_urlname', 'topic,groupnum');
        $url = $this->buildUrl( MEETUP_ENDPOINT_GROUP_COMMENTS, $Parameters, $required_params );
        $response =  $this->get( $url )->getResponse();
        return $response['results'];
    }
} // end class
