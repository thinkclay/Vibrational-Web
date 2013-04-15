<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Questions extends Model 
{	
	public function get_all()
	{
		$questions = array(
			array(
				'title'		=> 'Self-Perception',
				'content'	=> 'The majority of people with whom I hang out are genuinely interested in my success.'
			),
			array(
				'title'		=> 'Thought',
				'content'	=> 'My internal dialogue (self-talk, mind chatter) is consistently positive.'
			),
			array(
				'title'		=> 'Social',
				'content'	=> 'At various parties or events that I have attended, I have noticed how I feel around different people—such as "good vibes" or "bad vibes."'
			),
			array(
				'title'		=> 'Success',
				'content'	=> 'I understand that success is a choice.'
			),
			array(
				'title'		=> 'Habits',
				'content'	=> 'I understand that success is a habit, just like any other habit.'
			),
			array(
				'title'		=> 'Choices',
				'content'	=> 'I understand that I have two choices in all I do: (1) Make a choice for what I want or (2) Make a choice for something other than what I want.'
			),
			array(
				'title'		=> 'Process',
				'content'	=> 'I have a system that I follow that keeps me on track to achieving my most heartfelt dreams, goals, and desires.'
			),
			array(
				'title'		=> 'Sensitivity',
				'content' 	=> 'I understand that the feelings that I sense around others (i.e., their "vibes") are like "signatures" of their personal vibrations.'
			),
			array(
				'title'		=> 'Actions',
				'content'	=> 'I understand the saying, "If I want a different outcome, I have to choose a different action."'
			),
			array(
				'title'		=> 'Feelings',
				'content'	=> 'I understand that I have a choice in how I feel.'
			),
		);
		
		return $questions;
	}
}